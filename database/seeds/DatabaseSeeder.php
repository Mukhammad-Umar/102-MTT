<?php

use Illuminate\Database\Seeder;
use App\Models\{
    User,
    Employee,
    News,
    Slider,
    Gallery,
    Contact
};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Users
        User::create(
            [
                'name' => 'admin',
                'role' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => str_random(10),
            ]
        );
        User::create(
            [
                'name' => 'king',
                'role' => 'redac',
                'email' => 'king@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => str_random(10),
            ]
        );
        User::create(
            [
                'name' => 'omar',
                'role' => 'user',
                'email' => 'omar@gmail.com',
                'password' => bcrypt('12345678'),
                'remember_token' => str_random(10),
            ]
        );

        //Employees
        Employee::create(
            [
                'name' => 'MUHAYYO',
                'surname' => 'TOSHMUHAMEDOVA',
                'position' => 'Mudira',
                'telephone' => '97 741-98-55',
                'image' => 'employees/nophoto.jpg'
            ]
        );
        //Employees
        Employee::create(
            [
                'name' => 'JAMES',
                'surname' => 'JOHNSON',
                'position' => 'Psixolog',
                'telephone' => '97 741-98-55',
                'image' => 'employees/nophoto.jpg'
            ]
        );
        //Employees
        Employee::create(
            [
                'name' => 'JOHN',
                'surname' => 'JONES',
                'position' => 'Ortoped',
                'telephone' => '97 741-98-55',
                'image' => 'employees/nophoto.jpg'
            ]
        );
        //Employees
        Employee::create(
            [
                'name' => 'ROBERT',
                'surname' => 'MILLER',
                'position' => 'Tarbiyalovchi',
                'telephone' => '97 741-98-55',
                'image' => 'employees/nophoto.jpg'
            ]
        );
        //Employees
        Employee::create(
            [
                'name' => 'MICHAEL',
                'surname' => 'WILLIAMS',
                'position' => 'Tarbiyalovchi',
                'telephone' => '97 741-98-55',
                'image' => 'employees/nophoto.jpg'
            ]
        );
        //Employees
        Employee::create(
            [
                'name' => 'WILLIAM',
                'surname' => 'MOORE',
                'position' => 'Tarbiyalovchi',
                'telephone' => '97 741-98-55',
                'image' => 'employees/nophoto.jpg'
            ]
        );

        // News
        News::create(
            [
                'title' => 'ЎЗБЕКИСТОН РЕСПУБЛИКАСИ МАКТАБГАЧА ТАЪЛИМ ВАЗИРИ А.В.ШИННИНГ ФАРҒОНА ВИЛОЯТИГА ИШЧИ САФАРИ.',
                'information' => 'Жорий йилнинг 4 июнь куни Ўзбекистон Республикаси Мактабгача таълим вазири А.В.Шин Фарғона вилоятига ташриф буюрди.',
                'image' => 'news/news2.jpg'
            ]
        );
        News::create(
            [
                'title' => 'ЎЗБЕКИСТОН РЕСПУБЛИКАСИ МАКТАБГАЧА ТАЪЛИМ ВАЗИРИ А.В.ШИННИНГ ФАРҒОНА ВИЛОЯТИГА ИШЧИ САФАРИ.',
                'information' => 'Жорий йилнинг 4 июнь куни Ўзбекистон Республикаси Мактабгача таълим вазири А.В.Шин Фарғона вилоятига ташриф буюрди.',
                'image' => 'news/news2.jpg'
            ]
        );
        News::create(
            [
                'title' => 'ЎЗБЕКИСТОН РЕСПУБЛИКАСИ МАКТАБГАЧА ТАЪЛИМ ВАЗИРИ А.В.ШИННИНГ ФАРҒОНА ВИЛОЯТИГА ИШЧИ САФАРИ.',
                'information' => 'Жорий йилнинг 4 июнь куни Ўзбекистон Республикаси Мактабгача таълим вазири А.В.Шин Фарғона вилоятига ташриф буюрди.',
                'image' => 'news/news2.jpg',
            ]
        );
        News::create(
            [
                'title' => '"САЛОМАТЛИК АЛИФБОСИ" ДА БОЛАЛАРДА НУТҚ РИВОЖЛАНИШИНИНГ ЎЗИГА ХОС ТОМОНЛАРИ.',
                'information' => 'Нутқ ривожланишининг барча инсонлар учун умумий бўлган босқичлари бор.Аммо, шу билан бирга, ҳар бир бола табиатида бу жараённи тезлаштирувчи ёки аксинча, секинлаштирувчи ўзига хосликлар бўлади.',
                'image' => 'news/news1.png',
            ]
        );
        News::create(
            [
                'title' => '"САЛОМАТЛИК АЛИФБОСИ" ДА БОЛАЛАРДА НУТҚ РИВОЖЛАНИШИНИНГ ЎЗИГА ХОС ТОМОНЛАРИ.',
                'information' => 'Нутқ ривожланишининг барча инсонлар учун умумий бўлган босқичлари бор.Аммо, шу билан бирга, ҳар бир бола табиатида бу жараённи тезлаштирувчи ёки аксинча, секинлаштирувчи ўзига хосликлар бўлади.',
                'image' => 'news/news1.png'
            ]
        );
        News::create(
            [
                'title' => '"САЛОМАТЛИК АЛИФБОСИ" ДА БОЛАЛАРДА НУТҚ РИВОЖЛАНИШИНИНГ ЎЗИГА ХОС ТОМОНЛАРИ.',
                'information' => 'Нутқ ривожланишининг барча инсонлар учун умумий бўлган босқичлари бор.Аммо, шу билан бирга, ҳар бир бола табиатида бу жараённи тезлаштирувчи ёки аксинча, секинлаштирувчи ўзига хосликлар бўлади.',
                'image' => 'news/news1.png'
            ]
        );
        News::create(
            [
                'title' => '"САЛОМАТЛИК АЛИФБОСИ" ДА БОЛАЛАРДА НУТҚ РИВОЖЛАНИШИНИНГ ЎЗИГА ХОС ТОМОНЛАРИ.',
                'information' => 'Нутқ ривожланишининг барча инсонлар учун умумий бўлган босқичлари бор.Аммо, шу билан бирга, ҳар бир бола табиатида бу жараённи тезлаштирувчи ёки аксинча, секинлаштирувчи ўзига хосликлар бўлади.',
                'image' => 'news/news1.png'
            ]
        );

        // Slider
        Slider::create(
            [
                'title' => '102-Bog`cha',
                'image' => 'slayder/pic1.jpg'
            ]
        );
        Slider::create(
            [
                'title' => 'Sinfxona',
                'image' => 'slayder/pic2.jpg'
            ]
        );
        Slider::create(
            [
                'title' => 'Oshxona',
                'image' => 'slayder/pic3.jpg'
            ]
        );
        Slider::create(
            [
                'title' => 'Sport Zal',
                'image' => 'slayder/pic4.jpg'
            ]
        );
        Slider::create(
            [
                'title' => 'Raqs va Musiqa zali',
                'image' => 'slayder/pic5.jpg'
            ]
        );
        Slider::create(
            [
                'title' => 'Basseyn',
                'image' => 'slayder/pic6.jpg'
            ]
        );

        // Gallery
        Gallery::create(
            [
                'image' => 'gallery/pic1.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic2.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic3.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic4.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic5.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic6.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic7.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic8.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic9.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic10.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic11.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic12.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic13.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic14.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic15.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic16.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic17.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic18.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic19.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic20.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic21.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic22.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic23.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic24.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic25.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic26.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic27.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic28.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic29.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic30.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic31.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic32.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic33.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic34.jpg'
            ]
        );
        Gallery::create(
            [
                'image' => 'gallery/pic35.jpg'
            ]
        );
    }
}
