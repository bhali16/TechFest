using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using TechFest.Models;

namespace TechFest.Controllers
{
    public class ParticipantController : Controller
    {
        private dbTechFestEntities db = new dbTechFestEntities();
        // GET: Participant
        public ActionResult Index()
        {
            tblParticipant tbl = new tblParticipant();
            return View(tbl);
        }

        [HttpPost]
        public ActionResult Index(tblParticipant obj)
        {
            var checkemail = db.tblParticipants.Find(obj.Email);
            if (checkemail != null)
            {
                var checkpwd = db.tblParticipants.Where(x => x.Email == obj.Email && x.Pwd == obj.Pwd).FirstOrDefault();
                if (checkpwd != null)
                {
                    Session["Participant"] = checkemail.Email;
                    return RedirectToAction("Dashboard", "Participant");
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
            tblParticipant tbl = new tblParticipant();
            return View(tbl);
        }

        [HttpPost]
        public ActionResult SignUp(tblParticipant obj)
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
            var chkEmail = db.tblParticipants.Find(obj.Email);
            var chkRegNo = db.tblParticipants.Where(e => e.RegNo == obj.RegNo).FirstOrDefault();
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
                        tblParticipant tbl = new tblParticipant();
                        tbl.Email = obj.Email;
                        tbl.Gender = obj.Gender;
                        tbl.Name = obj.Name;
                        tbl.ProfilePhoto = obj.ProfilePhoto;
                        tbl.Pwd = obj.Pwd;
                        tbl.RegNo = obj.RegNo;
                        tbl.Approved = false;
                        db.tblParticipants.Add(tbl);
                        db.SaveChanges();
                        return RedirectToAction("Index", "Participant");
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

        [HttpPost]
        public ActionResult Logout()
        {
            Session.Clear();
            return RedirectToAction("Index", "Participant");
        }

        public ActionResult Dashboard()
        {
            if (Session["Participant"] == null)
            {
                return RedirectToAction("Index", "Participant");
            }
            else
            {
                return View();
            }
        }
    }
}