<?php

use App\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pages = [
            ['title' => 'About Us', 'url' => 'about-us', 'description' => 'about page containt', 'content' => '<p>PATAAKI FOOTBALL CLUB is a not for profit Football Organization whose aim is to nature young talented football athletes and improve their lives as they develop in the game. Pataaki Football Club (PFC) was formerly known as CHILDLIFE SOCCER ACADEMY which was a small community football group of kids from the Garden Compound. The kids would get together to play everyday at the Olympia Secondary School grounds with the aim to stay off bad habits such drug and alcohol abuse among many. PFC is registered with FOOTBALL ASSOCIATION OF ZAMBIA (FAZ). Our girls play the Senior Super League for girls and our boys are playing the Division 4 league under league. PATAAKI FC runs alongside a dedicated academy where talent development starts from. With all this exposure to competitive football, we have had 4 of our girls selected into the Zambia national under17 team. And our boys are constantly in the probable list for the junior national teams. With over 350 kids playing under the PATAAKI Brand, our academy is a natural next step in our vision to drive forward the sports industry together. Our academy is tailored to provide unparalleled and uncommon opportunities for kids in high density areas to excel and build a more defined life by according them the best chance at a successful career in the beautiful game, whether on or off the pitch. Our principal is defined by three fronts namely;</p><p><br><strong>1. Soccer Excellence</strong><br><strong>2. Education empowerment</strong><br><strong>3. Respect to Religious values</strong></p><p><br>In order to keep our players focused and dedicated to delivering their best,<br>we have the Back to School program and feeding program where we assist<br>the kids in need of School financial assistance and those who may need<br>support for relief food for their families’ home respectively.<br>The mantle we have girded on is quite massive and our capacity alone<br>is not enough to achieve our goals due to the limited financial<br>resources at our disposal. We can do so much but we still need to<br>continue taking care of these kids and help them become better<br>citizens in the future.</p>'],
            ['title' => 'Contact Us', 'url' => 'contact-us', 'description' => 'contact page containt', 'content' => '<h2>&nbsp;</h2><h2><strong>Pataaki Football Club</strong></h2><h4><strong>Dont hesitate to contact us</strong></h4><p><strong>Feel free to contact us</strong></p><p>&nbsp;</p><ul><li>Phone: +260-973900092</li><li>Email: <a href="mailto:info@pataakifc.com">info@pataakifc.com</a>&nbsp;</li><li>Address : No.21, Off Lake Road, Ibex Hill, Lusaka, Zambia</li></ul>']
        ];

        foreach ($pages as $page)
            Page::create($page);
    }
}
