using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using TechFest.Models;
namespace TechFest.Controllers
{
    public class EventHeadsController : Controller
    {
        private dbTechFestEntities db = new dbTechFestEntities();
        // GET: EventHeads
        public ActionResult Index()
        {
            tblEventHead tbl = new tblEventHead();
            return View(tbl);
        }

        [HttpPost]
        public ActionResult Index(tblEventHead obj)
        {
            var checkemail = db.tblEventHeads.Where(x => x.Email == obj.Email).FirstOrDefault();
            if (checkemail != null)
            {
                var checkpwd = db.tblEventHeads.Where(x => x.Email == checkemail.Email && x.Pwd == obj.Pwd).FirstOrDefault();
                if (checkpwd != null)
                {
                    Session["EventHead"] = checkemail.Email;
                    return RedirectToAction("Dashboard", "EventHeads");
                }
                else
                {
                    ViewBag.error = "Invalid Password";
                    return View();
                }
            }
            else
            {
                ViewBag.error = "Invalid Credentials";
                return View();
            }
        }

        public ActionResult SignUp()
        {
            tblEventHead tbl = new tblEventHead();
            return View(tbl);
        }

        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult SignUp(tblEventHead obj)
        {
            string filename = Path.GetFileNameWithoutExtension(obj.Imagefile.FileName);
            int filesize = obj.Imagefile.ContentLength;
            string ext = Path.GetExtension(obj.Imagefile.FileName);
            int count = 0;
            string[] extensionArr = new string[]
            {
                ".jpg",".jpeg"
            };
            for (int i = 0; i < extensionArr.Length; i++)
            {
                if (extensionArr[i] == ext.ToLower())
                {
                    count++;
                    break;
                }
                else
                {
                    continue;
                }
            }
            var chkEmail = db.tblEventHeads.Find(obj.Email);
            var chkRegNo = db.tblEventHeads.Where(e => e.RegNo == obj.RegNo).FirstOrDefault();
            if (chkEmail == null)
            {
                if (chkRegNo == null)
                {
                    if (count > 0)
                    {
                        filename = obj.Email + filename + ext;
                        obj.ProfilePhoto = "~/ProfilePhotos/" + filename;
                        filename = Path.Combine(Server.MapPath("~/ProfilePhotos/"), filename);
                        obj.Imagefile.SaveAs(filename);
                        //data collection;
                        tblEventHead tbl = new tblEventHead();
                        tbl.Email = obj.Email;
                        tbl.Gender = obj.Gender;
                        tbl.Name = obj.Name;
                        tbl.ProfilePhoto = obj.ProfilePhoto;
                        tbl.Pwd = obj.Pwd;
                        tbl.RegNo = obj.RegNo;
                        db.tblEventHeads.Add(tbl);
                        db.SaveChanges();
                        return RedirectToAction("Index", "EventHeads");
                    }
                    else
                    {
                        ViewBag.error = "Choose valid profile picture";
                        return View();
                    }
                }
                else
                {
                    ViewBag.error = "Registration number already exist";
                    return View();
                }
            }
            else
            {
                ViewBag.error = "Email already exist";
                return View();
            }
        }

        public ActionResult Dashboard()
        {
            if (Session["EventHead"] == null)
            {
                return RedirectToAction("Index", "EventHeads");
            }
            else
            {
                return View();
            }
        }

        public ActionResult Details(string Email)
        {
            if (Session["EventHead"] == null)
            {
                return RedirectToAction("Index", "EventHeads");
            }
            else
            {
                tblEventHead tbl = db.tblEventHeads.Find(Email);
                return View(tbl);
            }
        }

        [HttpPost]
        public ActionResult Logout()
        {
            Session.Clear();
            return RedirectToAction("Index", "EventHeads");
        }
    }
}