<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Ad;

class AdFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $ad = new Ad();
        $ad->setContent('change esse zarna.une55$.utas6282240395.');
        $manager->persist($ad);

        $ad2 = new Ad();
        //$ad2->setContent('"Өв чуулган" бүлхэмээс "Монгол өв соёлын төв" төслийг дэмжин уухайлж байна. Хар үүлс сарниж, нар гарч тэнгэр цэлмэхийн адил бид өөрсдийн Монгол Өв Соёлын төвтэй болох ажилд учирч буй аливаа саад тотгорыг даван гарч,  АНУ-д оршин суугаа Монгол үндэстний хувь заяанд сайнаар нөлөөлөх үйлс нь жижиг цучилаас эхлэн агуу зүйлийн эхлэл болох ерөөлийг дагуулах нь дамжиггүй ээ. Иймээс Монгол хүн бүрийн эрхэм нандин үүрэг хэмээн ухамсарлаж хүн бүр хичээж "Монгол өв соёлын төв"-ийн барилгаа өөрийн болгон авахад уухайлан дэмжиж хандиваа өргөж оролцоцгооё!');
        $ad2->setContent('3D VOLUME LASH har, bor ongoor nudnii helbert tohiruulan buh torliin sizenii songolttoigoor, hamgiin hymd uneer (40$)hiij bn😊 ☎️ +1 (331) 627-9104 Bairshil: schaumburgt. Shine jiliin tsagaa avaarai🤗');
        $manager->persist($ad2);

        $ad3 = new Ad();
        $ad3->setContent('Манекюрын ажил хайж байна, ажлын туршлагатай. утас 4642042634');
        $manager->persist($ad3);

        $ad4 = new Ad();
        $ad4->setContent('Chicago d roommate r orno eswel studio hulsulnu');
        $manager->persist($ad4);

        $ad5 = new Ad();
        $ad5->setContent('Монголоос $ авна. Монголруу $ явуулах хүнтэй солино. Монголд дансанд хийнэ. 312-522-1930');
        $manager->persist($ad5);

        $ad6 = new Ad();
        $ad6->setContent('Glenview, IL roommate awna 7734036400');
        $manager->persist($ad6);

        $ad7 = new Ad();
        $ad7->setContent('Chicago d roommate r orno eswel studio hulsulnu');
        $manager->persist($ad7);

        $manager->flush();
    }
}
