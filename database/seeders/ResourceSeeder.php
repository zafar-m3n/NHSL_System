<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resource;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Resource::create([
            'title' => 'Medical Ethics Education',
            'author' => 'Harvard University',
            'description' => 'An online course designed to introduce healthcare professionals to the fundamentals of medical ethics.',
            'link' => 'https://online-learning.harvard.edu/course/introduction-medical-ethics',
            'type' => 'Course',
            'category' => 'Medical',
            'is_featured' => false,
        ]);

        Resource::create([
            'title' => 'AI in Healthcare',
            'author' => 'World Health Organization',
            'description' => 'An article on the growing importance of artificial intelligence in healthcare.',
            'link' => 'https://www.who.int/news-room/feature-stories/detail/artificial-intelligence-in-healthcare',
            'type' => 'Article',
            'category' => 'Healthcare',
            'is_featured' => true,
        ]);

        Resource::create([
            'title' => 'Mental Health and Wellness Resources',
            'author' => 'National Institute of Mental Health',
            'description' => 'Guidelines on maintaining mental health and wellness for professionals.',
            'link' => 'https://www.nimh.nih.gov/health/topics/caring-for-your-mental-health',
            'type' => 'Guide',
            'category' => 'Wellness',
            'is_featured' => false,
        ]);
    }
}
