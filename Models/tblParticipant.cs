//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated from a template.
//
//     Manual changes to this file may cause unexpected behavior in your application.
//     Manual changes to this file will be overwritten if the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace TechFest.Models
{
    using System;
    using System.Collections.Generic;
    
    public partial class tblParticipant
    {
        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2214:DoNotCallOverridableMethodsInConstructors")]
        public tblParticipant()
        {
            this.tblEventRegistrations = new HashSet<tblEventRegistration>();
            this.tblEventRegistrations1 = new HashSet<tblEventRegistration>();
        }
    
        public string Email { get; set; }
        public string Name { get; set; }
        public string Gender { get; set; }
        public string RegNo { get; set; }
        public Nullable<bool> Approved { get; set; }
        public string Pwd { get; set; }
        public string ProfilePhoto { get; set; }
    
        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2227:CollectionPropertiesShouldBeReadOnly")]
        public virtual ICollection<tblEventRegistration> tblEventRegistrations { get; set; }
        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2227:CollectionPropertiesShouldBeReadOnly")]
        public virtual ICollection<tblEventRegistration> tblEventRegistrations1 { get; set; }
    }
}
