<?php

namespace Twat\MagBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Twat\MagBundle\Entity\Blog;

class BlogFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $blog1 = new Blog();
        $blog1->setTitle('A day with Symfony2');
        $blog1->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $blog1->setImage('beach.jpg');
        $blog1->setAuthor('dsyph3r');
        $blog1->setTags('symfony2, php, paradise, symblog');
        $blog1->setCreated(new \DateTime());
        $blog1->setUpdated($blog1->getCreated());
        $manager->persist($blog1);

        $blog2 = new Blog();
        $blog2->setTitle('Adam Sandler Arrested for Crimes against Humanity');
        $blog2->setBlog('Film star Adam Sandler was not-so-Happy Gilmour this week after being arrested in Afghanistan. Eventually found hiding in a hole in Helmand Province, Sandler had been on the run from authorities for over a month following an international arrest warrant issued against him by the United Nations. Member nations are said to be delighted by the news.<br><br>
        
        “We got him!” said one UN spokesperson “It’s taken years of hard work to bring down his oppressive regime of awful, awful films, but the people of the world spoke when they took to the streets in mass protest during The Sandler Spring. I think Grown Ups 2 was just the last straw for everyone; they had had more than enough of his shitty movies.”<br><br>

        We literally couldn’t agree more. How anyone could allow Adam Sandler to keep making films is beyond us. So what’s next for the star of such crimes against humanity as Jack & Jill and You Don’t Mess with the Zohan?<br><br>

        “Hopefully it will be a very swift trial and the sentencing will be harsh. We’ll definitely be pushing for the death penalty – after all, we are talking about an abhorrent monster who has perpetrated some of the biggest injustices on people around the world.”<br><br>

        Wow! We can’t even begin to imagine how the world would look without Adam Sandler in it, although we reckon it would literally be some sort of epic utopia. But hang on a minute! What about all of the DVDs of his films? Will we ever be rid of his dreadful legacy?<br><br>

        “Well, we’re currently working on making it illegal to buy, sell or even watch an Adam Sandler movie. We’ve already set up a NATO taskforce to hunt down and destroy any copies of Sandler’s piss-poor filmography and the links to his films on streaming sites have been coded to alert authorities to the location of any remaining supporters he has left out there.”<br><br>

        OMG! We forgot that some people actually like his films – and even worse is that they literally paid to watch them. What on Earth were they thinking? Also, what happens if we were to meet one of these freak-shows?<br><br>

        “We would certainly advise against any contact with fans of Adam Sandler’s work; there’s just no telling what they are capable of. If you know of anyone who has ever laughed at an Adam Sandler film, you should report it to the authorities who can remove these dangerous individuals and place them in special camps we have set up to keep them from harming the rest of humanity.”<br><br>

        Phew! We literally feel so much safer with these monsters locked away from the rest of us normal people. With Sandler locked away, we hope the UN can get a move on with hunting down Kevin James who is still at large (LOL). ');
        $blog2->setImage('pool_leak.jpg');
        $blog2->setAuthor('Zero Cool');
        $blog2->setTags('pool, leaky, hacked, movie, hacking, symblog');
        $blog2->setCreated(new \DateTime("2011-07-23 06:12:33"));
        $blog2->setUpdated($blog2->getCreated());
        $manager->persist($blog2);

        $blog3 = new Blog();
        $blog3->setTitle('Misdirection. What the eyes see and the ears hear, the mind believes');
        $blog3->setBlog('Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog3->setImage('misdirection.jpg');
        $blog3->setAuthor('Gabriel');
        $blog3->setTags('misdirection, magic, movie, hacking, symblog');
        $blog3->setCreated(new \DateTime("2011-07-16 16:14:06"));
        $blog3->setUpdated($blog3->getCreated());
        $manager->persist($blog3);

        $blog4 = new Blog();
        $blog4->setTitle('The grid - A digital frontier');
        $blog4->setBlog('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $blog4->setImage('the_grid.jpg');
        $blog4->setAuthor('Kevin Flynn');
        $blog4->setTags('grid, daftpunk, movie, symblog');
        $blog4->setCreated(new \DateTime("2011-06-02 18:54:12"));
        $blog4->setUpdated($blog4->getCreated());
        $manager->persist($blog4);

        $blog5 = new Blog();
        $blog5->setTitle('You\'re either a one or a zero. Alive or dead');
        $blog5->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog5->setImage('one_or_zero.jpg');
        $blog5->setAuthor('Gary Winston');
        $blog5->setTags('binary, one, zero, alive, dead, !trusting, movie, symblog');
        $blog5->setCreated(new \DateTime("2011-04-25 15:34:18"));
        $blog5->setUpdated($blog5->getCreated());
        $manager->persist($blog5);

        $manager->flush();
    }

}