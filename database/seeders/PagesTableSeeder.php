<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Home',
                'slug' => 'home',
                'title' => 'Home',
            'content' => '<p><b><span style="text-align: var(--bs-body-text-align);">Welcome to THE10000.ae, a groundbreaking digital canvas where vision meets opportunity.</span><br></b></p><p>Here, we’ve reimagined how we connect and communicate online by transforming a massive 10,000-pixel grid into a vibrant mosaic of creativity and commerce.</p><p>Each pixel represents a unique digital space, offering businesses and individuals alike a chance to shine in a distinctive way.</p><p><b>Our Vision:</b></p><p>At THE10000.ae, we believe that every pixel tells a story.</p><p>This platform was born from a simple yet powerful idea: to create a space where your brand, your message, and your vision can stand out in a sea of digital noise.</p><p>By offering 10,000 individual pixels, each available for purchase at just 777 AED per pixel per annum, we’ve crafted an exclusive opportunity for you to be part of a grand, interactive display that captures attention and invites engagement.</p><p><b>Why Pixels?</b></p><p>The pixel is the fundamental unit of digital imagery, a small yet crucial piece of a larger picture.</p><p>This concept resonates with our philosophy that every detail matters and that small investments can lead to remarkable outcomes.</p><p>Each pixel block on our homepage is more than just a spot on a grid, it’s a dynamic space where your brand\'s unique image, URL, and slogan come together to create a powerful visual impact.</p><p><b>Our Journey</b></p><p>The inception of THE10000.ae was fueled by a desire to innovate and connect.</p><p>As a passionate entrepreneur with a background in digital marketing and design, I wanted to create a platform that not only showcases creativity but also fosters genuine connections between brands and their audiences.</p><p>The concept of a pixel-based marketplace emerged from countless brainstorming sessions, a deep love for digital art, and a commitment to providing a fresh approach to online advertising.</p><p><b>What You Can Expect</b></p><p>On our homepage, you\'ll discover an eclectic mix of tiny images, each representing a different pixel purchased by individuals and businesses like you. Hover over these images to reveal captivating slogans and explore the unique links each pixel connects to.</p><p>This interactive experience not only highlights your presence but also ensures your message is seen in a creative and engaging way.</p><p><b>Join Us on This Exciting Journey</b></p><p>We invite you to explore our homepage and see how your story can be woven into this grand tapestry of digital innovation.</p><p>By becoming part of THE10000.ae, you’re not just purchasing digital space, you’re joining a vibrant community dedicated to pushing the boundaries of online interaction and expression.</p><p>Thank you for visiting THE10000.ae.</p><p>We’re excited to share this journey with you and look forward to seeing how your pixel will contribute to our shared vision of creativity and connection.</p><p>Connect with us, and let’s make pixels count.</p>',
                'image' => NULL,
                'meta_title' => 'Home',
                'meta_description' => 'Home',
                'meta_keywords' => 'Home',
                'created_at' => NULL,
                'updated_at' => '2024-08-01 01:45:31',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'About',
                'slug' => 'about',
                'title' => 'About us',
            'content' => '<p>Unleashing Creativity, One Pixel at a Time.</p><p><b style="text-align: var(--bs-body-text-align);">Our Story</b><br></p><p>Welcome to THE10000.ae, where pixels become more than just dots on a screen, they become a canvas for creativity, a testament to innovation, and a bridge between imagination and reality.</p><p>Our journey began with a simple idea : What if pixels could be more than placeholders?</p><p>What if they could tell stories, connect people, and empower dreams?</p><p><br></p><p>As pixel enthusiasts ourselves, we embarked on a mission to transform the mundane into the extraordinary.</p><p>We envisioned a digital mosaic—a tapestry of 10,000 pixels, each waiting to be claimed by visionaries, entrepreneurs, and dreamers like you.</p><p>And so, THE10000.ae was born, a pixelated universe where every block holds the promise of something greater.</p><p><br></p><p><b>Our Mission</b></p><p>At THE10000.ae, our mission is clear, to democratize digital real estate.</p><p>We believe that pixels are more than just data points, they’re opportunities waiting to be seized.</p><p>By offering pixel-based links, we empower individuals, businesses, and causes to leave their mark on the digital landscape. Whether you’re an artist showcasing your portfolio, a startup promoting your product, or a nonprofit championing a cause, our pixels are your canvas.</p><p><br></p><p><b>How It Works</b></p><p>When you purchase a pixel block, it becomes your virtual property, upload your tiny image, link it to your desired URL, and craft a compelling slogan, your pixel is now part of a collective masterpiece.</p><p><br></p><p><b>Visibility</b></p><p>As visitors explore our pixelated canvas, they’ll encounter your creation.</p><p>Hover over a pixel, and your slogan springs to life, inviting curiosity and engagement.</p><p><br></p><p><b>Community</b></p><p>THE10000.ae isn’t just a platform, it’s a community, connect with fellow pixel owners, collaborate, and celebrate the diversity of creativity.</p><p>Together, we’re shaping the digital landscape, one pixel at a time.</p><p><br></p><p>Join the Pixel Revolution</p><p>Explore our canvas, claim your pixel, and be part of a digital legacy.</p><p>Together, we’re rewriting the rules—one pixel at a time.</p>',
                'image' => NULL,
                'meta_title' => 'About us',
                'meta_description' => 'About us',
                'meta_keywords' => 'About us',
                'created_at' => NULL,
                'updated_at' => '2024-08-01 00:36:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'FAQs',
                'slug' => 'faqs',
                'title' => 'FAQs',
                'content' => '<p>As we embark on this pixelated journey, we\'re thrilled to address your most pressing questions.</p><p>Let\'s dive into the details :</p><p><b>1. What is THE10000.ae?</b></p><p>THE10000.ae is more than a canvas, it\'s a digital mosaic of 10,000 pixels waiting to be claimed by visionaries, entrepreneurs, and dreamers like you.</p><p>Each pixel block represents an opportunity to leave your mark on the digital landscape.</p><p><b>2. Why did we start this unique pixel-based platform?</b></p><p>Our journey began with a simple idea:</p><p>What if pixels could be more than placeholders?</p><p>What if they could tell stories, connect people and empower dreams?</p><p>We wanted to democratize digital real estate to give every pixel a purpose beyond the ordinary.</p><p><b>3. Our Mission:</b></p><p>At THE10000.ae, we\'re on a mission to:</p><p>- Empower individuals, businesses, and causes to leave their mark.</p><p>- Transform mundane pixels into opportunities waiting to be seized.</p><p>- Rewrite the rules, one pixel at a time.</p><p><b>4. How does it benefit you?</b></p><p>For Pixel Purchasers:</p><p>&nbsp; &nbsp; - Showcase your portfolio, promote your startup, or champion a cause.</p><p>&nbsp; &nbsp; - Own a piece of the digital canvas and connect with a vibrant community.</p><p>&nbsp; &nbsp; - Make your mark visible to curious visitors.</p><p>For Visitors:</p><p>&nbsp; &nbsp; - Explore a dynamic mosaic of creativity.</p><p>&nbsp; &nbsp; - Discover diverse content, one pixel at a time.</p><p>&nbsp; &nbsp; - Engage with slogans that spark curiosity.</p><p>Join the pixel revolution, explore our canvas, and be part of a digital legacy.</p><p>Together, we\'ll redefine what pixels can do.</p>',
                'image' => NULL,
                'meta_title' => 'FAQs',
                'meta_description' => 'FAQs',
                'meta_keywords' => 'FAQs',
                'created_at' => NULL,
                'updated_at' => '2024-08-01 00:34:10',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Contact',
                'slug' => 'contact',
                'title' => 'Contact us',
                'content' => '<p>Contact us<br></p>',
                'image' => NULL,
                'meta_title' => 'Contact us',
                'meta_description' => 'Contact us',
                'meta_keywords' => 'Contact us',
                'created_at' => NULL,
                'updated_at' => '2024-08-01 00:40:38',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Price',
                'slug' => 'price',
                'title' => 'Price',
            'content' => '<h2><b>Invest in Digital Innovation.</b></h2><p><span style="text-align: var(--bs-body-text-align);"><b>Welcome to the Pixel Marketplace.</b></span><br></p><p>At THE10000.ae, we’ve redefined digital advertising with a unique and impactful approach: a vast canvas of 10,000 pixels, each a gateway to your brand’s digital presence, our pixel-based platform offers an unprecedented opportunity for businesses and individuals to make a lasting impression in an innovative way.</p><p><span style="text-align: var(--bs-body-text-align);"><b>Investment Details:</b></span><br></p><p>Each pixel on our dynamic homepage is priced at 777 AED per annum, this investment secures a distinct 1x1 pixel space in our 10,000-pixel grid, allowing you to showcase your brand with a personalized image, link, and slogan.</p><p><span style="text-align: var(--bs-body-text-align);"><b>Why 777 AED?</b></span><br></p><p>The choice of 777 AED is deliberate and symbolic, in many cultures, the number 7 is considered lucky and signifies perfection and completeness, by choosing this number, we aim to embody the essence of premium quality and exceptional value, ensuring that every pixel you purchase is not just a part of a grid, but a vital component of a larger, interactive experience.</p><p><span style="text-align: var(--bs-body-text-align);"><b>What’s Included:</b></span><br></p><p>Each pixel you acquire will display a tiny image of your choice, linking directly to your specified URL:</p><p>- Interactive Experience: Hover over your pixel to reveal a compelling slogan or message that captures attention and encourages engagement.</p><p>- Digital Footprint: your pixel will be part of a larger mosaic, representing a diverse array of businesses and ideas, creating a unique, visually captivating experience for all visitors.</p><p><span style="text-align: var(--bs-body-text-align);"><b>Why Choose Pixel Advertising?</b></span><br></p><p>Innovative Visibility: Stand out in a digital landscape saturated with traditional ads, each pixel is a unique opportunity to make an impact.</p><p><span style="text-align: var(--bs-body-text-align);"><b>Cost-Effective:</b></span><br></p><p>At just 777 AED per pixel per annum, you’re investing in an affordable yet effective platform that offers significant visibility and engagement.</p><p><b><span style="text-align: var(--bs-body-text-align);">Memorable Impact:</span><br></b></p><p>With thousands of pixels forming an interactive and visually striking homepage, your message is sure to leave a lasting impression.</p><p><span style="text-align: var(--bs-body-text-align);"><b>Join us in shaping the future:</b></span><br></p><p>Our platform was born from a desire to blend art with technology, creating a space where every pixel matters and every detail counts.</p><p>By investing in our pixel-based marketplace, you’re not just purchasing advertising space, you’re becoming part of a cutting-edge digital canvas that connects and captivates, explore our homepage, choose your pixel, and be a part of this innovative journey, thank you for considering THE10000.ae for your digital presence, transform your message into a pixel-perfect experience.</p>',
                'image' => NULL,
                'meta_title' => 'Price',
                'meta_description' => 'Price',
                'meta_keywords' => 'Price',
                'created_at' => '2024-08-01 00:07:24',
                'updated_at' => '2024-08-01 00:09:35',
            ),
        ));
        
        
    }
}