<?php

namespace Database\Seeders;

use App\Models\Domain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $work_domains = [
            'Technology' => [
                'Software Development',
                'Data Science',
                'Cybersecurity',
                'Artificial Intelligence',
                'Networking',
                'Web Development'
            ],
            'Healthcare' => [
                'Medicine',
                'Nursing',
                'Pharmacy',
                'Medical Research',
                'Healthcare Administration',
                'Public Health'
            ],
            'Engineering' => [
                'Civil Engineering',
                'Mechanical Engineering',
                'Electrical Engineering',
                'Chemical Engineering',
                'Aerospace Engineering',
                'Environmental Engineering'
            ],
            'Education' => [
                'Teaching',
                'Educational Administration',
                'Curriculum Development',
                'Special Education',
                'Educational Technology',
                'Counseling'
            ],
            'Finance' => [
                'Banking',
                'Investment',
                'Accounting',
                'Financial Planning',
                'Insurance',
                'Economics'
            ],
            'Arts and Entertainment' => [
                'Visual Arts',
                'Music',
                'Performing Arts',
                'Film and Television',
                'Photography',
                'Writing and Literature'
            ],
            'Business' => [
                'Marketing',
                'Sales',
                'Human Resources',
                'Management',
                'Entrepreneurship',
                'Business Analysis'
            ],
            'Law' => [
                'Criminal Law',
                'Civil Rights',
                'Corporate Law',
                'Family Law',
                'Environmental Law',
                'Intellectual Property'
            ],
            'Science' => [
                'Biology',
                'Chemistry',
                'Physics',
                'Geology',
                'Astronomy',
                'Environmental Science'
            ],
            'Hospitality and Tourism' => [
                'Hotel Management',
                'Travel Agency',
                'Event Planning',
                'Restaurant Management',
                'Tour Guiding',
                'Culinary Arts'
            ]
        ];

        $workDomains = [
            'Technology' => 'The Technology domain encompasses a broad range of fields related to the creation, development, and application of technological innovations and systems. This domain includes areas such as software development, where professionals design and build software applications; data science, which involves analyzing and interpreting complex data to drive decision-making; cybersecurity, which focuses on protecting systems and networks from digital threats; and artificial intelligence, which leverages machine learning and other techniques to create intelligent systems. Additional fields include networking, which deals with the interconnection of computer systems, and web development, which involves creating and maintaining websites and web applications. Technology professionals drive advancements and solve complex problems across various industries, making it a dynamic and rapidly evolving field.',
            'Healthcare' => 'The Healthcare domain encompasses a wide range of professions and services dedicated to maintaining and improving the health and well-being of individuals. It includes medical fields such as medicine, where practitioners diagnose and treat illnesses and injuries; nursing, which involves providing compassionate care and support to patients; and pharmacy, focusing on the preparation and dispensing of medications. Healthcare also covers medical research, which aims to advance knowledge and develop new treatments, and healthcare administration, which involves managing healthcare facilities and systems. Public health professionals work on broader community health initiatives and preventive care. This domain is essential for ensuring access to quality care, advancing medical knowledge, and improving health outcomes on both individual and societal levels.',
            'Science' => 'The Science domain encompasses the systematic study of the natural world through observation, experimentation, and analysis. It includes various fields such as biology, which explores living organisms and their interactions with the environment; chemistry, which investigates the properties, composition, and reactions of substances; and physics, which examines the fundamental principles governing matter and energy. Geology focuses on the Earth\'s structure, materials, and processes, while astronomy studies celestial objects and phenomena beyond Earth. Environmental science integrates aspects of biology, chemistry, and earth sciences to address environmental challenges and promote sustainability. Scientists in this domain drive innovation, expand knowledge, and solve complex problems, contributing to advancements in technology, medicine, and our understanding of the universe.',
            'Engineering' => 'The Engineering domain encompasses a variety of disciplines focused on applying scientific principles and mathematical techniques to solve complex problems and design innovative solutions. It includes fields such as civil engineering, which involves the design and construction of infrastructure like bridges and roads; mechanical engineering, which focuses on creating and optimizing mechanical systems and devices; and electrical engineering, which deals with electrical systems and electronic devices. Chemical engineering combines chemistry with engineering principles to develop processes for producing chemicals and materials. Aerospace engineering involves the design and development of aircraft and spacecraft, while environmental engineering focuses on addressing environmental challenges and promoting sustainability. Engineering professionals are crucial in developing technology, improving infrastructure, and advancing industrial processes, making it a fundamental and impactful field in modern society.',
            'Education' => 'The Education domain is dedicated to the process of teaching and learning, aiming to foster knowledge, skills, and critical thinking across all ages. It encompasses various roles, including teaching, where educators impart knowledge and facilitate learning in classrooms or other settings. Educational administration involves managing schools and educational institutions, shaping policies, and ensuring effective operations. Curriculum development focuses on designing and implementing educational programs and materials to meet learning objectives. Special education caters to students with diverse learning needs, providing tailored support and resources. Educational technology leverages digital tools and platforms to enhance learning experiences, while counseling addresses the academic and emotional needs of students. This domain is essential for personal development, societal progress, and the nurturing of future generations.',
            'Finance' => 'The Finance domain involves the management, analysis, and strategic planning of monetary resources and investments. It includes various fields such as banking, which focuses on financial services and transactions; investment, where professionals manage portfolios and make decisions to grow wealth; and accounting, which involves recording and analyzing financial transactions to ensure accuracy and compliance. Financial planning helps individuals and businesses strategize their financial goals and manage resources effectively. Insurance provides risk management solutions to protect against potential losses, while economics studies the principles governing the production, distribution, and consumption of goods and services. Finance professionals play a crucial role in ensuring financial stability, driving economic growth, and facilitating strategic decision-making.',
            'Arts and Entertainment' => 'The Arts and Entertainment domain encompasses creative fields that focus on artistic expression, performance, and enjoyment. It includes visual arts, where artists create works such as paintings, sculptures, and installations that evoke emotional and intellectual responses. Music involves the composition, performance, and production of musical works across various genres. Performing arts cover disciplines like theater, dance, and live performance, offering dynamic and expressive experiences for audiences. Film and television production encompasses the creation of visual stories through moving images, including directing, acting, and editing. Photography captures moments and scenes through the lens, while writing and literature involve crafting stories, poems, and essays that reflect and shape cultural narratives. This domain enriches cultural life, provides entertainment, and offers avenues for personal and collective expression.',
            'Business' => 'The Business domain focuses on the principles and practices involved in the creation, management, and growth of enterprises and organizations. It includes various areas such as marketing, which involves promoting and selling products or services, and sales, which focuses on the direct transaction of goods and services to customers. Human Resources manages employee relations, recruitment, and organizational development to ensure a productive and compliant workforce. Management encompasses strategic planning and oversight to guide organizations towards their goals. Entrepreneurship involves the initiation and development of new ventures, while business analysis uses data and insights to drive decision-making and improve operations. This domain is crucial for driving economic activity, fostering innovation, and ensuring the efficient and effective operation of organizations.',
            'Law' => 'The Law domain encompasses the study, practice, and application of legal principles and systems to uphold justice and regulate societal conduct. It includes various branches such as criminal law, which deals with offenses against the state and ensures justice for victims through prosecution and defense. Civil rights law focuses on protecting individual freedoms and ensuring equal treatment under the law. Corporate law involves legal matters related to business operations, including compliance, mergers, and disputes. Family law addresses issues such as divorce, custody, and family-related matters. Environmental law is concerned with regulations and policies aimed at protecting the environment. Intellectual property law safeguards creations of the mind, including patents, trademarks, and copyrights. Legal professionals in this domain play a crucial role in interpreting and enforcing laws, advising clients, and advocating for justice in various legal contexts.',
            'Hospitality and Tourism' => 'The Hospitality and Tourism domain focuses on providing exceptional service and experiences to travelers and guests, enhancing their enjoyment and satisfaction. It includes hotel management, which involves overseeing the operations and services of lodging establishments to ensure a comfortable stay for guests. The travel agency sector assists individuals and groups in planning and booking travel arrangements, including flights, accommodations, and activities. Event planning encompasses organizing and managing events such as conferences, weddings, and parties, ensuring they run smoothly and meet clients\' expectations. Restaurant management deals with the operation and administration of dining establishments, including menu planning and customer service. Tour guiding involves leading and educating visitors about destinations, landmarks, and cultural sites. This domain is essential for promoting tourism, driving economic growth, and delivering memorable experiences.'
        ];
        
        // Sort the main array by keys (categories)
        ksort($work_domains);

        foreach ($work_domains as $domain_name => $sub_skills) {
            $decription = $workDomains[$domain_name];
            Domain::create([
                'name' => $domain_name,
                'description' => $decription,
                'sub_skills' => $sub_skills,
            ]);
        }
    }
    
}
