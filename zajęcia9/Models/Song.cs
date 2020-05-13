using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace Lab9.Models
{
    public class Song {
        [Required(ErrorMessage = "Name is required!")]
        [StringLength(100, ErrorMessage = "Maximal length of the name of a song is 100 characters!")]
        public string Name { get; set; }
        [StringLength(50, ErrorMessage = "Maximal length of the name of a song is 50 characters!")]
        [Required(ErrorMessage = "Artist is required!")]
        public string Artist { get; set; }
        [StringLength(10, ErrorMessage = "Maximal length of the name of a song is 10 characters!")]
        [Required(ErrorMessage = "Genre is required!")]
        public int GenreId { get; set; }
        [Key]
        public int Id { get; set; }
    }
}