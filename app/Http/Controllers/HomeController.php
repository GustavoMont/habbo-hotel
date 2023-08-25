<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function getHomepage()
    {
        $rooms = [
            [
                'title' => 'Quarto de solteiro',
                'price' => 50.99,
                'description' => 'Quarto para uma pessoa. Possui banheiro, televisão e ar-condicionado'
            ],
            [
                'title' => 'Quarto 2 pessoas',
                'price' => 79.99,
                'description' => 'Quarto para 2 pessoas. Possui banheiro, duas camas de solteiro, televisão e ar-condicionado'
            ],
            [
                'title' => 'Quarto de casal',
                'price' => 109.99,
                'description' => 'Quarto para 3 pessoas. Possui banheiro, uma cama de casal e uma cama de solteiro, televisão e ar-condicionado'
            ]
        ];
        $reviews = [
            [
                'client' => 'Antônio Sterco',
                'stars' => 4,
                'testemony' => 'Eu precisei me hospedar no hotel e gostei muito dos quartos. Me surpreendi de verdade, a qualidade dos quartos café, tudo',
                'avatar' => 'https://i.ytimg.com/vi/dchoWEadw2E/frame0.jpg'
            ],
            [
                'client' => 'Estevão Rogério',
                'stars' => 4,
                'testemony' => 'Sou uma pessoa já de idade, e tudo no quarto é extremamente confortável',
                'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9Gy105NQ4QGe6bfvKu8MUXy2eXp7W5nLRcwqiFfB4Safp5BePtPYC0ssmPVgjjEKKzD0&usqp=CAU'
            ],
            [
                'client' => 'Marcos Jeeves',
                'stars' => 5,
                'testemony' => 'Um dos melhores lugares que já me hospedei. Todos são muito receptivos, nem parece real. Muito bom, recomendo sempre. THANK YOU ✋',
                'avatar' => 'https://static.abplive.com/wp-content/uploads/2020/04/13180021/b3839337-2b17-41d7-926a-8c664298d3a1.jpg'
            ],
            [
                'client' => 'Natasha Russomano',
                'stars' => 3,
                'testemony' => 'O lugar realmente é muito bom e confortável. O quarto de solteiro senti falta de algumas coisas, (principalmente no frigobar), mas nada que tenha atrapalhado minhas experiência. Top',
                'avatar' => 'https://sm.ign.com/ign_br/news/m/marvels-av/marvels-avengers-hero-line-up-mirroring-the-mcus-is-a-total_m821.jpg'
            ],
        ];
        return view('home', compact('rooms', 'reviews'));
    }
}