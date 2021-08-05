<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Books;
use App\Models\Categories;
use App\Models\Category;
use App\Models\User;
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
        \App\Models\User::truncate();
        \App\Models\Category::truncate();
        \App\Models\Book::truncate();



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
            'author' => 'Kyle Simpson',
            'released' => 2015,
            'publisher' => "O'Reilly",
            'category_id' => 1,
            'picture' => 'images/books/you_dont_know_JS1.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-449-33558-8',
            'title' => 'You dont know JS - Scopes & Closures',
            'author' => 'Kyle Simpson',
            'released' => 2015,
            'publisher' => "O'Reilly",
            'category_id' => 1,
            'picture' => 'images/books/you_dont_know_JS2.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-491-90415-2',
            'title' => 'You dont know JS - this & Object Prototypes',
            'author' => 'Kyle Simpson',
            'released' => 2015,
            'publisher' => "O'Reilly",
            'category_id' => 1,
            'picture' => 'images/books/you_dont_know_JS3.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-491-90419-0',
            'title' => 'You dont know JS - Types & Grammar',
            'author' => 'Kyle Simpson',
            'released' => 2015,
            'publisher' => "O'Reilly",
            'category_id' => 1,
            'picture' => 'images/books/you_dont_know_JS4.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-491-90422-0',
            'title' => 'You dont know JS - Async & Performance',
            'author' => 'Kyle Simpson',
            'released' => 2015,
            'publisher' => "O'Reilly",
            'category_id' => 1,
            'picture' => 'images/books/you_dont_know_JS5.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-491-90424-4',
            'title' => 'You dont know JS - ES6 & Beyond',
            'author' => 'Kyle Simpson',
            'released' => 2015,
            'publisher' => "O'Reilly",
            'category_id' => 1,
            'picture' => 'images/books/you_dont_know_JS6.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-449-36503-5',
            'title' => 'Speaking JavaScript',
            'author' => 'Dr.Axel Rauschmayer',
            'released' => 2014,
            'publisher' => "O'Reilly",
            'category_id' => 1,
            'picture' => 'images/books/speaking_javascript.jpg',
        ]);

        Book::create([
            'isbn' => '978-0-596-80552-4',
            'title' => 'JavaScript: The Definitive Guide',
            'author' => 'David Flanagan',
            'released' => 2011,
            'publisher' => "O'Reilly",
            'category_id' => 1,
            'picture' => 'images/books/javascript_the_definitive_guide.jpg',
        ]);

        Book::create([
            'isbn' => '978-0-596-51774-8',
            'title' => 'JavaScript: The Good Parts',
            'author' => 'Douglas Crockford',
            'released' => 2008,
            'publisher' => "O'Reilly",
            'category_id' => 1,
            'picture' => 'images/books/javascript_the_good_parts.jpg',
        ]);

        Book::create([
            'isbn' => '9781530051120',
            'title' => 'Python for Everybody: Exploring Data in Python 3',
            'author' => 'Charles R. Severance',
            'released' => 2016,
            'publisher' => "",
            'category_id' => 2,
            'picture' => 'images/books/python_for_everybody.jpg',
        ]);

        Book::create([
            'isbn' => '9781492339243',
            'title' => 'Python for Informatics: Exploring Information in Python 2',
            'author' => 'Charles R. Severance',
            'released' => 2015,
            'publisher' => "",
            'category_id' => 2,
            'picture' => 'images/books/python_informatics.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-491-93936-9',
            'title' => 'Think Python',
            'author' => 'Allen B. Downey',
            'released' => 2016,
            'publisher' => "O'Reilly",
            'category_id' => 2,
            'picture' => 'images/books/think_python.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-78961-585-2',
            'title' => 'Python 3 Object-Oriented Programming',
            'author' => 'Dusty Phillips',
            'released' => 2018,
            'publisher' => "Packt",
            'category_id' => 2,
            'picture' => 'images/books/python_oo.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-59327-992-9',
            'title' => 'Automate the Boring Stuff with Python: Practical Programming for Total Beginners 2nd Edition',
            'author' => 'Al Sweigart',
            'released' => 2020,
            'publisher' => "No Starch",
            'category_id' => 2,
            'picture' => 'images/books/automate_python.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-59327-795-6',
            'title' => 'Invent Your Own Computer Games With Python 4th Edition',
            'author' => 'Al Sweigart',
            'released' => 2017,
            'publisher' => "No Starch",
            'category_id' => 2,
            'picture' => 'images/books/python_games.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-59327-878-6',
            'title' => 'Serious Python',
            'author' => 'Julien Danjou',
            'released' => 2019,
            'publisher' => "No Starch",
            'category_id' => 2,
            'picture' => 'images/books/serious_python.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-25-958740-5',
            'title' => 'Programming the Raspberry Pi: Getting Started with Python',
            'author' => 'Dr. Simon Monk',
            'released' => 2016,
            'publisher' => "McGraw-Hill Education",
            'category_id' => 2,
            'picture' => 'images/books/python_raspberry_pi.jpg',
        ]);

        Book::create([
            'isbn' => '978-3-86490-568-1',
            'title' => 'Python Tricks',
            'author' => 'Dan Bader',
            'released' => 2009,
            'publisher' => "dpunkt.verlag",
            'category_id' => 2,
            'picture' => 'images/books/python_tricks.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-59327-192-3',
            'title' => 'Grey Hat Python: Python programming for hackers and reverse engineers',
            'author' => 'Justin Seitz',
            'released' => 2009,
            'publisher' => "No Starch",
            'category_id' => 2,
            'picture' => 'images/books/grey_hat_python.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-593227-590-7',
            'title' => 'Black Hat Python: Python programming for hackers and pentesters',
            'author' => 'Justin Seitz',
            'released' => 2015,
            'publisher' => "No Starch",
            'category_id' => 2,
            'picture' => 'images/books/black_hat_python.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-118-00818-8',
            'title' => 'HTML & CSS: Design and Build Websites',
            'author' => 'Jon Duckett',
            'released' => 2011,
            'publisher' => "Wiley",
            'category_id' => 8,
            'picture' => 'images/books/HTML_CSS.jpg',
        ]);

        Book::create([
            'isbn' => '978-91-44-10556-7',
            'title' => 'Webbutveckling med PHP och MySQL',
            'author' => 'Montathar Faraon',
            'released' => 2016,
            'publisher' => "McGraw-Hill Education",
            'category_id' => 3,
            'picture' => 'images/books/webbutveckling_php_mysql.jpg',
        ]);

        Book::create([
            'isbn' => '978-0-9922794-4-8',
            'title' => 'The Principles Of Beautiful Web Design Third Edition',
            'author' => 'Jason Beaird & James George',
            'released' => 2014,
            'publisher' => "SitePoint",
            'category_id' => 5,
            'picture' => 'images/books/principles_of_beautiful_web_design.jpg',
        ]);

        Book::create([
            'isbn' => '978-91-44-06919-7',
            'title' => 'Databasteknik',
            'author' => 'Thomas Padron-McCarthy & Tore Risch',
            'released' => 2018,
            'publisher' => "Studentlitteratur",
            'category_id' => 4,
            'picture' => 'images/books/databasteknik.jpg',
        ]);

        Book::create([
            'isbn' => '978-91-44-10870-4',
            'title' => 'Statistisk Dataanalys',
            'author' => 'Svante Körner & Lars Wahlgren',
            'released' => 2015,
            'publisher' => "Studentlitteratur",
            'category_id' => 12,
            'picture' => 'images/books/statistisk_dataanalys.jpg',
        ]);

        Book::create([
            'isbn' => '978-1-292-15359-9',
            'title' => 'Computer Networking: A Top-Down Approach 7th Edition',
            'author' => 'Ross Kurose',
            'released' => 2017,
            'publisher' => "Pearson",
            'category_id' => 7,
            'picture' => 'images/books/computer_network.jpg',
        ]);

        Book::create([
            'isbn' => '978-91-7331-2387',
            'title' => 'Effektiv Visuell Kommunikation',
            'author' => 'Bo Bergström',
            'released' => 2009,
            'publisher' => "Carlsson Bokförlag",
            'category_id' => 5,
            'picture' => 'images/books/effektiv_visuell_kommunikation.jpg',
        ]);

        Book::create([
            'isbn' => '91-7203-497-1',
            'title' => 'Bild & Budskap',
            'author' => 'Bo Bergström',
            'released' => 2001,
            'publisher' => "Carlsson Bokförlag",
            'category_id' => 5,
            'picture' => 'images/books/bild_budskap.jpg',
        ]);

        Book::create([
            'isbn' => '47-06535-4',
            'title' => 'Design i Fokus för Produktutveckling',
            'author' => 'Kenneth Österlin',
            'released' => 2003,
            'publisher' => "Liber",
            'category_id' => 5,
            'picture' => 'images/books/design_i_fokus.jpg',
        ]);

        Book::create([
            'isbn' => '',
            'title' => 'Konvergens Kultur: Där gammla och nya medier kolliderar',
            'author' => 'Henry Jenkins',
            'released' => 2012,
            'publisher' => "Diadalos",
            'category_id' => 9,
            'picture' => 'images/books/konvergens_kulturen.jpg',
        ]);

        Book::create([
            'isbn' => '978-0-7148-4488-6',
            'title' => 'The Photo Book',
            'author' => 'Phaidon Press',
            'released' => 2009,
            'publisher' => "Phaidon Press",
            'category_id' => 6,
            'picture' => 'images/books/the_photo_book.jpg',
        ]);

        Book::create([
            'isbn' => '978-91-636-0942-8',
            'title' => 'Konsten att ta vinnande bilder',
            'author' => 'Göran Segeholm',
            'released' => 2008,
            'publisher' => "Pagina",
            'category_id' => 6,
            'picture' => 'images/books/konsten_att_ta_vinnande_bilder.jpg',
        ]);

        Book::create([
            'isbn' => '91-971773-4-2',
            'title' => 'Länge Leve Lärandet',
            'author' => 'Klas Mellander',
            'released' => 1991,
            'publisher' => "Celemiab International",
            'category_id' => 9,
            'picture' => 'images/books/länge_leve_lärandet.jpg',
        ]);

        Book::create([
            'isbn' => '91-40-62784-5',
            'title' => 'Konsten att Tala och Skriva, Andra Upplagan',
            'author' => 'Siv Strömquist',
            'released' => 1998,
            'publisher' => "Gleerups Förlag",
            'category_id' => 9,
            'picture' => 'images/books/konsten_att_tala_och_skriva.jpg',
        ]);

        Book::create([
            'isbn' => '1-84403-342-2',
            'title' => 'I Was There: Gigs That Changed the World',
            'author' => 'Mark Paytress',
            'released' => 2005,
            'publisher' => "Cassell Illustrated",
            'category_id' => 10,
            'picture' => 'images/books/gigs_that_changed_the_world.jpg',
        ]);

        Book::create([
            'isbn' => '91-0-057504-6',
            'title' => 'Bonniers Musiklexikon',
            'author' => 'Albert Bonniers Förlag AB',
            'released' => 2003,
            'publisher' => "Albert Bonniers Förlag AB",
            'category_id' => 10,
            'picture' => 'images/books/bonniers_musiklexikon.jpg',
        ]);

        Book::create([
            'isbn' => '978-0-9562455-1-9',
            'title' => 'The Stormriders Surf Guide: Indonesia And The Indian Ocean',
            'author' => 'Bruce Sutherland, Dan Haylock & Ollie Fitzjones',
            'released' => 2011,
            'publisher' => "Low Pressure LTD",
            'category_id' => 11,
            'picture' => 'images/books/stormrider_surf_guide_indonesia.jpg',
        ]);

        Book::create([
            'isbn' => '978-0771880209',
            'title' => 'Wilderness Survival',
            'author' => 'Litographed by K.M McDonald @ Queens Printer, Victoria',
            'released' => 1978,
            'publisher' => "province of British Columbia",
            'category_id' => 11,
            'picture' => 'images/books/wilderness_survival.jpg',
        ]);
    }
}
