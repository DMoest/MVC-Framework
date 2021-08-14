<?php

namespace Database\Seeders;

use App\Models\HighscoreYatzy;
use App\Models\User;
use App\Models\Author;
use App\Models\Book;
use App\Models\Publisher;
use App\Models\Category;
use Illuminate\Database\Seeder;



/**
 * Database Seeder class to populate the database with initial/example data.
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        /* --- Truncate / Removes data / Clears before seeding --- */
        User::truncate();
        Category::truncate();
        Book::truncate();



        /* --- User Seeds --- */
         User::create([
             'name' => 'Daniel Andersson',
             'email' => 'd.andersson@example.com',
             'password' => bcrypt('myPassword'),
         ]);

        User::create([
            'name' => 'Natasha Asmarini',
            'email' => 'natasha@example.com',
            'password' => bcrypt('myPassword'),
        ]);

        User::create([
            'name' => 'Cerah Moest',
            'email' => 'cerah@example.com',
            'password' => bcrypt('myPassword'),
        ]);

        User::create([
            'name' => 'Hulu Andersson',
            'email' => 'hulu@example.com',
            'password' => bcrypt('myPassword'),
        ]);



        /* --- Publishers Seeds --- */
        Publisher::create([
            'name' => "O'Reilly",
        ]);

        Publisher::create([
            'name' => "Packt",
        ]);

        Publisher::create([
            'name' => "No Starch",
        ]);

        Publisher::create([
            'name' => "McGraw-Hill Education",
        ]);

        Publisher::create([
            'name' => "dpunkt.verlag",
        ]);

        Publisher::create([
            'name' => "Wiley",
        ]);

        Publisher::create([
            'name' => "Studentlitteratur",
        ]);

        Publisher::create([
            'name' => "SitePoint",
        ]);

        Publisher::create([
            'name' => "Pearson",
        ]);

        Publisher::create([
            'name' => "Carlsson Bokförlag",
        ]);

        Publisher::create([
            'name' => "Liber",
        ]);

        Publisher::create([
            'name' => "Diadalos",
        ]);

        Publisher::create([
            'name' => "Phaidon Press",
        ]);

        Publisher::create([
            'name' => "Pagina",
        ]);

        Publisher::create([
            'name' => "Celemiab International",
        ]);

        Publisher::create([
            'name' => "Gleerups Förlag",
        ]);

        Publisher::create([
            'name' => "Cassell Illustrated",
        ]);

        Publisher::create([
            'name' => "Albert Bonniers Förlag AB",
        ]);

        Publisher::create([
            'name' => "Low Pressure LTD",
        ]);

        Publisher::create([
            'name' => "Province Of British Columbia",
        ]);

        Publisher::create([
            'name' => "Unknown Publisher",
        ]);



        /* --- Author Seeds --- */
        Author::create([
            'name' => 'Kyle Simpson',
            'publisher_id' => 1,
        ]);

        Author::create([
            'name' => 'Dr.Axel Rauschmayer',
            'publisher_id' => 1,
        ]);

        Author::create([
            'name' => 'David Flanagan',
            'publisher_id' => 1,
        ]);

        Author::create([
            'name' => 'Douglas Crockford',
            'publisher_id' => 1,
        ]);

        Author::create([
            'name' => 'Charles R. Severance',
            'publisher_id' => 21,
        ]);

        Author::create([
            'name' => 'Allen B. Downey',
            'publisher_id' => 1,
        ]);

        Author::create([
            'name' => 'Dusty Phillips',
            'publisher_id' => 2,
        ]);

        Author::create([
            'name' => 'Al Sweigart',
            'publisher_id' => 3,
        ]);

        Author::create([
            'name' => 'Julien Danjou',
            'publisher_id' => 3,
        ]);

        Author::create([
            'name' => 'Dr. Simon Monk',
            'publisher_id' => 4,
        ]);

        Author::create([
            'name' => 'Dan Bader',
            'publisher_id' => 5,
        ]);

        Author::create([
            'name' => 'Justin Seitz',
            'publisher_id' => 3,
        ]);

        Author::create([
            'name' => 'Jon Duckett',
            'publisher_id' => 6,
        ]);

        Author::create([
            'name' => 'Montathar Faraon',
            'publisher_id' => 7,
        ]);

        Author::create([
            'name' => 'Jason Beaird & James George',
            'publisher_id' => 8,
        ]);

        Author::create([
            'name' => 'Thomas Padron-McCarthy & Tore Risch',
            'publisher_id' => 7,
        ]);

        Author::create([
            'name' => 'Svante Körner & Lars Wahlgren',
            'publisher_id' => 7,
        ]);

        Author::create([
            'name' => 'Ross Kurose',
            'publisher_id' => 9,
        ]);

        Author::create([
            'name' => 'Bo Bergström',
            'publisher_id' => 10,
        ]);

        Author::create([
            'name' => 'Kenneth Österlin',
            'publisher_id' => 11,
        ]);

        Author::create([
            'name' => 'Henry Jenkins',
            'publisher_id' => 12,
        ]);

        Author::create([
            'name' => 'Phaidon Press',
            'publisher_id' => 13,
        ]);

        Author::create([
            'name' => 'Göran Segeholm',
            'publisher_id' => 14,
        ]);

        Author::create([
            'name' => 'Klas Mellander',
            'publisher_id' => 15,
        ]);

        Author::create([
            'name' => 'Siv Strömquist',
            'publisher_id' => 16,
        ]);

        Author::create([
            'name' => 'Mark Paytress',
            'publisher_id' => 17,
        ]);

        Author::create([
            'name' => 'Albert Bonniers Förlag AB',
            'publisher_id' => 18,
        ]);

        Author::create([
            'name' => 'Bruce Sutherland, Dan Haylock & Ollie Fitzjones',
            'publisher_id' => 19,
        ]);

        Author::create([
            'name' => 'Litographed by K.M McDonald @ Queens Printer, Victoria',
            'publisher_id' => 20,
        ]);



        /* --- Categories Seeds --- */
        Category::create([
            'name' => 'JavaScript',
        ]);

        Category::create([
            'name' => 'Python',
        ]);

        Category::create([
            'name' => 'PHP',
        ]);

        Category::create([
            'name' => 'Database',
        ]);

        Category::create([
            'name' => 'Design',
        ]);

        Category::create([
            'name' => 'Photography',
        ]);

        Category::create([
            'name' => 'Network',
        ]);

        Category::create([
            'name' => 'HTML',
        ]);

        Category::create([
            'name' => 'Education',
        ]);

        Category::create([
            'name' => 'Music',
        ]);

        Category::create([
            'name' => 'Outdoors',
        ]);

        Category::create([
            'name' => 'Information Analysis',
        ]);



        /* --- Books Seeds --- */
        Book::create([
            'isbn' => '978-1-491-92446-4',
            'title' => 'You dont know JS - Up & Going',
            'author_id' => 1,
            'released' => 2015,
            'publisher_id' => 1,
            'category_id' => 1,
            'picture' => 'images/books/you_dont_know_JS1.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-449-33558-8',
            'title' => 'You dont know JS - Scopes & Closures',
            'author_id' => 1,
            'released' => 2015,
            'publisher_id' => 1,
            'category_id' => 1,
            'picture' => 'images/books/you_dont_know_JS2.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-491-90415-2',
            'title' => 'You dont know JS - this & Object Prototypes',
            'author_id' => 1,
            'released' => 2015,
            'publisher_id' => 1,
            'category_id' => 1,
            'picture' => 'images/books/you_dont_know_JS3.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-491-90419-0',
            'title' => 'You dont know JS - Types & Grammar',
            'author_id' => 1,
            'released' => 2015,
            'publisher_id' => 1,
            'category_id' => 1,
            'picture' => 'images/books/you_dont_know_JS4.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-491-90422-0',
            'title' => 'You dont know JS - Async & Performance',
            'author_id' => 1,
            'released' => 2015,
            'publisher_id' => 1,
            'category_id' => 1,
            'picture' => 'images/books/you_dont_know_JS5.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-491-90424-4',
            'title' => 'You dont know JS - ES6 & Beyond',
            'author_id' => 1,
            'released' => 2015,
            'publisher_id' => 1,
            'category_id' => 1,
            'picture' => 'images/books/you_dont_know_JS6.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-449-36503-5',
            'title' => 'Speaking JavaScript',
            'author_id' => 2,
            'released' => 2014,
            'publisher_id' => 1,
            'category_id' => 1,
            'picture' => 'images/books/speaking_javascript.jpg',
        ]);

        Book::create([
            'isbn' => '978-0-596-80552-4',
            'title' => 'JavaScript: The Definitive Guide',
            'author_id' => 3,
            'released' => 2011,
            'publisher_id' => 1,
            'category_id' => 1,
            'picture' => 'images/books/javascript_the_definitive_guide.jpg',
        ]);

        Book::create([
            'isbn' => '978-0-596-51774-8',
            'title' => 'JavaScript: The Good Parts',
            'author_id' => 4,
            'released' => 2008,
            'publisher_id' => 1,
            'category_id' => 1,
            'picture' => 'images/books/javascript_the_good_parts.jpg',
        ]);

        Book::create([
            'isbn' => '9781530051120',
            'title' => 'Python for Everybody: Exploring Data in Python 3',
            'author_id' => 5,
            'released' => 2016,
            'publisher_id' => 21,
            'category_id' => 2,
            'picture' => 'images/books/python_for_everybody.jpg',
        ]);

        Book::create([
            'isbn' => '9781492339243',
            'title' => 'Python for Informatics: Exploring Information in Python 2',
            'author_id' => 5,
            'released' => 2015,
            'publisher_id' => 21,
            'category_id' => 2,
            'picture' => 'images/books/python_informatics.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-491-93936-9',
            'title' => 'Think Python',
            'author_id' => 6,
            'released' => 2016,
            'publisher_id' => 1,
            'category_id' => 2,
            'picture' => 'images/books/think_python.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-78961-585-2',
            'title' => 'Python 3 Object-Oriented Programming',
            'author_id' => 7,
            'released' => 2018,
            'publisher_id' => 2,
            'category_id' => 2,
            'picture' => 'images/books/python_oo.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-59327-992-9',
            'title' => 'Automate the Boring Stuff with Python: Practical Programming for Total Beginners 2nd Edition',
            'author_id' => 8,
            'released' => 2020,
            'publisher_id' => 3,
            'category_id' => 2,
            'picture' => 'images/books/automate_python.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-59327-795-6',
            'title' => 'Invent Your Own Computer Games With Python 4th Edition',
            'author_id' => 8,
            'released' => 2017,
            'publisher_id' => 3,
            'category_id' => 2,
            'picture' => 'images/books/python_games.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-59327-878-6',
            'title' => 'Serious Python',
            'author_id' => 9,
            'released' => 2019,
            'publisher_id' => 3,
            'category_id' => 2,
            'picture' => 'images/books/serious_python.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-25-958740-5',
            'title' => 'Programming the Raspberry Pi: Getting Started with Python',
            'author_id' => 10,
            'released' => 2016,
            'publisher_id' => 4,
            'category_id' => 2,
            'picture' => 'images/books/python_raspberry_pi.jpg',
        ]);

        Book::create([
            'isbn' => '978-3-86490-568-1',
            'title' => 'Python Tricks',
            'author_id' => 11,
            'released' => 2009,
            'publisher_id' => 5,
            'category_id' => 2,
            'picture' => 'images/books/python_tricks.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-59327-192-3',
            'title' => 'Grey Hat Python: Python programming for hackers and reverse engineers',
            'author_id' => 12,
            'released' => 2009,
            'publisher_id' => 3,
            'category_id' => 2,
            'picture' => 'images/books/grey_hat_python.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-593227-590-7',
            'title' => 'Black Hat Python: Python programming for hackers and pentesters',
            'author_id' => 12,
            'released' => 2015,
            'publisher_id' => 3,
            'category_id' => 2,
            'picture' => 'images/books/black_hat_python.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-118-00818-8',
            'title' => 'HTML & CSS: Design and Build Websites',
            'author_id' => 13,
            'released' => 2011,
            'publisher_id' => 6,
            'category_id' => 8,
            'picture' => 'images/books/HTML_CSS.jpg',
        ]);

        Book::create([
            'isbn' => '978-91-44-10556-7',
            'title' => 'Webbutveckling med PHP och MySQL',
            'author_id' => 14,
            'released' => 2016,
            'publisher_id' => 7,
            'category_id' => 3,
            'picture' => 'images/books/webbutveckling_php_mysql.jpg',
        ]);

        Book::create([
            'isbn' => '978-0-9922794-4-8',
            'title' => 'The Principles Of Beautiful Web Design Third Edition',
            'author_id' => 15,
            'released' => 2014,
            'publisher_id' => 8,
            'category_id' => 5,
            'picture' => 'images/books/principles_of_beautiful_web_design.jpg',
        ]);

        Book::create([
            'isbn' => '978-91-44-06919-7',
            'title' => 'Databasteknik',
            'author_id' => 16,
            'released' => 2018,
            'publisher_id' => 7,
            'category_id' => 4,
            'picture' => 'images/books/databasteknik.jpg',
        ]);

        Book::create([
            'isbn' => '978-91-44-10870-4',
            'title' => 'Statistisk Dataanalys',
            'author_id' => 17,
            'released' => 2015,
            'publisher_id' => 7,
            'category_id' => 12,
            'picture' => 'images/books/statistisk_dataanalys.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-292-15359-9',
            'title' => 'Computer Networking: A Top-Down Approach 7th Edition',
            'author_id' => 18,
            'released' => 2017,
            'publisher_id' => 9,
            'category_id' => 7,
            'picture' => 'images/books/computer_network.jpg',
        ]);

        Book::create([
            'isbn' => '978-91-7331-2387',
            'title' => 'Effektiv Visuell Kommunikation',
            'author_id' => 19,
            'released' => 2009,
            'publisher_id' => 10,
            'category_id' => 5,
            'picture' => 'images/books/effektiv_visuell_kommunikation.jpg',
        ]);

        Book::create([
            'isbn' => '91-7203-497-1',
            'title' => 'Bild & Budskap',
            'author_id' => 19,
            'released' => 2001,
            'publisher_id' => 10,
            'category_id' => 5,
            'picture' => 'images/books/bild_budskap.jpg',
        ]);

        Book::create([
            'isbn' => '47-06535-4',
            'title' => 'Design i Fokus för Produktutveckling',
            'author_id' => 20,
            'released' => 2003,
            'publisher_id' => 11,
            'category_id' => 5,
            'picture' => 'images/books/design_i_fokus.jpg',
        ]);

        Book::create([
            'isbn' => '978-91-7173-368-9',
            'title' => 'Konvergens Kultur: Där gammla och nya medier kolliderar',
            'author_id' => 21,
            'released' => 2012,
            'publisher_id' => 12,
            'category_id' => 9,
            'picture' => 'images/books/konvergens_kulturen.jpg',
        ]);

        Book::create([
            'isbn' => '978-0-7148-4488-6',
            'title' => 'The Photo Book',
            'author_id' => 22,
            'released' => 2009,
            'publisher_id' => 13,
            'category_id' => 6,
            'picture' => 'images/books/the_photo_book.jpg',
        ]);

        Book::create([
            'isbn' => '978-91-636-0942-8',
            'title' => 'Konsten att ta vinnande bilder',
            'author_id' => 23,
            'released' => 2008,
            'publisher_id' => 14,
            'category_id' => 6,
            'picture' => 'images/books/konsten_att_ta_vinnande_bilder.jpg',
        ]);

        Book::create([
            'isbn' => '91-971773-4-2',
            'title' => 'Länge Leve Lärandet',
            'author_id' => 24,
            'released' => 1991,
            'publisher_id' => 15,
            'category_id' => 9,
            'picture' => 'images/books/länge_leve_lärandet.jpg',
        ]);

        Book::create([
            'isbn' => '91-40-62784-5',
            'title' => 'Konsten att Tala och Skriva, Andra Upplagan',
            'author_id' => 25,
            'released' => 1998,
            'publisher_id' => 16,
            'category_id' => 9,
            'picture' => 'images/books/konsten_att_tala_och_skriva.jpg',
        ]);

        Book::create([
            'isbn' => '1-84403-342-2',
            'title' => 'I Was There: Gigs That Changed the World',
            'author_id' => 26,
            'released' => 2005,
            'publisher_id' => 17,
            'category_id' => 10,
            'picture' => 'images/books/gigs_that_changed_the_world.jpg',
        ]);

        Book::create([
            'isbn' => '91-0-057504-6',
            'title' => 'Bonniers Musiklexikon',
            'author_id' => 27,
            'released' => 2003,
            'publisher_id' => 18,
            'category_id' => 10,
            'picture' => 'images/books/bonniers_musiklexikon.jpg',
        ]);

        Book::create([
            'isbn' => '978-0-9562455-1-9',
            'title' => 'The Stormriders Surf Guide: Indonesia And The Indian Ocean',
            'author_id' => 27,
            'released' => 2011,
            'publisher_id' => 19,
            'category_id' => 11,
            'picture' => 'images/books/stormrider_surf_guide_indonesia.jpg',
        ]);

        Book::create([
            'isbn' => '978-0771880209',
            'title' => 'Wilderness Survival',
            'author_id' => 28,
            'released' => 1978,
            'publisher_id' => 20,
            'category_id' => 11,
            'picture' => 'images/books/wilderness_survival.jpg',
        ]);



        HighscoreYatzy::create([
            'name' => 'Kalle Anka',
            'score' => 99,
        ]);

        HighscoreYatzy::create([
            'name' => 'Kajsa Anka',
            'score' => 95,
        ]);

        HighscoreYatzy::create([
            'name' => 'Knatte Anka',
            'score' => 101,
        ]);

        HighscoreYatzy::create([
            'name' => 'Fnatte Anka',
            'score' => 93,
        ]);

        HighscoreYatzy::create([
            'name' => 'Tjatte Anka',
            'score' => 90,
        ]);
    }
}
