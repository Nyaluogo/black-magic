<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://wallpapercave.com/wp/0lbj0AR.jpg',
            'title' => 'Rorsharc',
            'description' => 'Dog carcass in alley this morning, tire tread on burst stomach.  This city is afraid of me.  I have seen it\'s true face.  The streets are extended gutters and the gutters are full of blood and when the drains finally scab over, all the vermin will drown.  The accumulated filth of all their sex and murder will foam up about their waists and all the whores and politicians will look up and shout "Save us!"...

...and I\'ll look down, and whisper "no."

They had a choice, all of them.  They could have followed in the footsteps of good men like my father, or President Truman.  Decent men, who believed in a day\'s work for a day\'s pay.  Instead the followed the droppings of lechers and Communists and didn\'t realize that the trail led over a precipice until it was too late.  Don\'t tell me they didn\'t have a choice.

Now the whole world stands on the brink, staring down into bloody hell, all those liberals and intellectuals and smooth-talkers... and all of a sudden, nobody can think of anything to say.',
            'price' => 10000,
            'user_id' => 1,
            'category' => 'comic',
            'tags' => '#no'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images5.alphacoders.com/289/289717.jpg',
            'title' => 'Comedian',
            'description' => 'Dog carcass in alley this morning, tire tread on burst stomach.  This city is afraid of me.  I have seen it\'s true face.  The streets are extended gutters and the gutters are full of blood and when the drains finally scab over, all the vermin will drown.  The accumulated filth of all their sex and murder will foam up about their waists and all the whores and politicians will look up and shout "Save us!"...

...and I\'ll look down, and whisper "no."

They had a choice, all of them.  They could have followed in the footsteps of good men like my father, or President Truman.  Decent men, who believed in a day\'s work for a day\'s pay.  Instead the followed the droppings of lechers and Communists and didn\'t realize that the trail led over a precipice until it was too late.  Don\'t tell me they didn\'t have a choice.

Now the whole world stands on the brink, staring down into bloody hell, all those liberals and intellectuals and smooth-talkers... and all of a sudden, nobody can think of anything to say.',
            'price' => 100000,
            'user_id' => 1,
            'category' => 'comic',
            'tags' => '#itsallajoke'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images4.alphacoders.com/788/thumb-1920-78834.jpg',
            'title' => 'Mr Manhattan',
            'description' => 'Dog carcass in alley this morning, tire tread on burst stomach.  This city is afraid of me.  I have seen it\'s true face.  The streets are extended gutters and the gutters are full of blood and when the drains finally scab over, all the vermin will drown.  The accumulated filth of all their sex and murder will foam up about their waists and all the whores and politicians will look up and shout "Save us!"...

...and I\'ll look down, and whisper "no."

They had a choice, all of them.  They could have followed in the footsteps of good men like my father, or President Truman.  Decent men, who believed in a day\'s work for a day\'s pay.  Instead the followed the droppings of lechers and Communists and didn\'t realize that the trail led over a precipice until it was too late.  Don\'t tell me they didn\'t have a choice.

Now the whole world stands on the brink, staring down into bloody hell, all those liberals and intellectuals and smooth-talkers... and all of a sudden, nobody can think of anything to say.',
            'price' => 10000,
            'user_id' => 1,
            'category' => 'comic',
            'tags' => '#timeisrelevant'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.shximai.com/data/out/211/67762508-watchmen-wallpapers.jpg',
            'title' => 'its a joke',
            'description' => 'Dog carcass in alley this morning, tire tread on burst stomach.  This city is afraid of me.  I have seen it\'s true face.  The streets are extended gutters and the gutters are full of blood and when the drains finally scab over, all the vermin will drown.  The accumulated filth of all their sex and murder will foam up about their waists and all the whores and politicians will look up and shout "Save us!"...

...and I\'ll look down, and whisper "no."

They had a choice, all of them.  They could have followed in the footsteps of good men like my father, or President Truman.  Decent men, who believed in a day\'s work for a day\'s pay.  Instead the followed the droppings of lechers and Communists and didn\'t realize that the trail led over a precipice until it was too late.  Don\'t tell me they didn\'t have a choice.

Now the whole world stands on the brink, staring down into bloody hell, all those liberals and intellectuals and smooth-talkers... and all of a sudden, nobody can think of anything to say.',
            'price' => 10000,
            'user_id' => 3,
            'category' => 'comic',
            'tags' => '#haha'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.shximai.com/data/out/211/68309355-watchmen-wallpapers.jpg',
            'title' => 'watchmen',
            'description' => 'Dog carcass in alley this morning, tire tread on burst stomach.  This city is afraid of me.  I have seen it\'s true face.  The streets are extended gutters and the gutters are full of blood and when the drains finally scab over, all the vermin will drown.  The accumulated filth of all their sex and murder will foam up about their waists and all the whores and politicians will look up and shout "Save us!"...

...and I\'ll look down, and whisper "no."

They had a choice, all of them.  They could have followed in the footsteps of good men like my father, or President Truman.  Decent men, who believed in a day\'s work for a day\'s pay.  Instead the followed the droppings of lechers and Communists and didn\'t realize that the trail led over a precipice until it was too late.  Don\'t tell me they didn\'t have a choice.

Now the whole world stands on the brink, staring down into bloody hell, all those liberals and intellectuals and smooth-talkers... and all of a sudden, nobody can think of anything to say.',
            'price' => 10000,
            'user_id' => 2,
            'category' => 'comic',
            'tags' => '#watchmen'
        ]);
        $product->save();
    }
}
