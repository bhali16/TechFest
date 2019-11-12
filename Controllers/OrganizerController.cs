using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using TechFest.Models;

namespace TechFest.Controllers
{
    public class OrganizerController : Controller
    {
        private dbTechFestEntities db = new dbTechFestEntities();
        // GET: Organizer
        public ActionResult Index()
        {
            tblOrganizer tbl = new tblOrganizer();
            return View(tbl);
        }

        [HttpPost]
        public ActionResult Index(tblOrganizer obj)
        {
            var checkEmail = db.tblOrganizers.Where(x => x.Email == obj.Email).FirstOrDefault();
            if (checkEmail != null)
            {
                var checkpwd = db.tblOrganizers.Where(x => x.Email == checkEmail.Email && x.Pwd == obj.Pwd).FirstOrDefault();
                if (checkpwd != null)
                {
                    Session["Organizer"] = checkEmail.Email;
                    return RedirectToAction("Dashboard", "Organizer");
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

        public ActionResult Dashboard()
        {
            if (Session["Organizer"] == null)
            {
                return RedirectToAction("Index", "Organizer");
            }
            else
            {
                string email = Session["Organizer"].ToString();
                tblOrganizer tbl = db.tblOrganizers.Find(email);
                return View(tbl);
            }
        }
    }
}