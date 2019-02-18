-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2019 at 01:01 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cocco`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `category_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `category_title`) VALUES
(1, 'Fashion'),
(2, 'Health and Beauty'),
(3, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id_image` int(11) NOT NULL,
  `alt` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `image_path` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `small_image_path` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_image`, `alt`, `image_path`, `small_image_path`) VALUES
(1, 'Jasmina Sevic portrait', 'images/jasmina-sevic-portrait.jpg', 'images/jasmina-sevic-portrait-small.jpg'),
(2, 'Cocco editor portrait', 'images/unknown-user.jpg', 'images/unknown-user-small.jpg'),
(3, 'You Only Need 5 Minutes in Nature to Improve Your Mood', 'images/blog-images/five-minutes-in-nature-featured.jpg', 'images/blog-images/five-minutes-in-nature-small.jpg'),
(4, 'Vitamin D deficiency and how to avoid it', 'images/blog-images/vitamin-d-deficiency-diet-cheese-featured.jpg', 'images/blog-images/vitamin-d-deficiency-diet-cheese-small.jpg'),
(5, 'Is owning a dog good for your health', 'images/blog-images/is-owning-a-dog-good-for-your-health-featured.jpg', 'images/blog-images/is-owning-a-dog-good-for-your-health-small.jpg'),
(6, 'Catherine Deneuve\'s auction passes $1m', 'images/blog-images/catherine-deneuve-auction-featured.jpg', 'images/blog-images/catherine-deneuve-auction-small.jpg'),
(7, 'Four vitamins and minerals to help you to sleep better', 'images/blog-images/best-supplements-for-sleep-featured.jpg', 'images/blog-images/best-supplements-for-sleep-small.jpg'),
(8, 'Can Exercise Prevent Depression?', 'images/blog-images/can-exercise-prevent-depression-featured.jpg', 'images/blog-images/can-exercise-prevent-depression-small.jpg'),
(9, 'Largest Underwater Theme Park Is Coming to Bahrain', 'images/blog-images/bahrain-theme-park-featured.jpg', 'images/blog-images/bahrain-theme-park-small.jpg'),
(10, 'Airbnb makes amend in its work', 'images/blog-images/airbnb-grottole-travel-featured.jpg', 'images/blog-images/airbnb-grottole-travel-small.jpg'),
(11, 'The best cities in Europe for a city break', 'images/blog-images/best-european-cities-for-spring-break-featured.jpg', 'images/blog-images/best-european-cities-for-spring-break-small.jpg'),
(12, 'Givenchy in Paris: Waight Keller embraces purity', 'images/blog-images/givenchy-in-paris-featured.jpg', 'images/blog-images/givenchy-in-paris-small.jpg'),
(13, 'Valentino Blossoms at Spring 2019 Couture Show', 'images/blog-images/valentino-2019-spring-show-featured.jpg', 'images/blog-images/valentino-2019-spring-show-small.jpg'),
(14, 'Bali plans tourist tax to tackle plastic pollution', 'images/blog-images/bali-plans-tourist-tax-featured.jpg', 'images/blog-images/bali-plans-tourist-tax-small.jpg'),
(15, 'Discover the latest 2019 fashion news on Cocco!', 'images/slider-image-fashion.jpg', ''),
(16, 'The most popular health and beauty trends!', 'images/slider-image-beauty.jpg', ''),
(17, 'Get the latest travel news, guides, tips and ideas', 'images/slider-image-travel.jpg', ''),
(85, 'Laza', 'images/user-images/1550278396unknown-user.jpg', 'images/user-images/1550278396unknown-user.jpg'),
(86, 'Pera', 'images/blog-images/1550283319jasmina-sevic-portrait.jpg', 'images/blog-images/1550283319jasmina-sevic-portrait.jpg'),
(87, 'Pera', 'images/blog-images/1550283343jasmina-sevic-portrait.jpg', 'images/blog-images/1550283343jasmina-sevic-portrait.jpg'),
(88, 'Pera', 'images/blog-images/1550283379jasmina-sevic-portrait.jpg', 'images/blog-images/1550283379jasmina-sevic-portrait.jpg'),
(89, 'Pera', 'images/blog-images/1550283505jasmina-sevic-portrait.jpg', 'images/blog-images/1550283505jasmina-sevic-portrait.jpg'),
(90, 'Pera', 'images/blog-images/1550283603jasmina-sevic-portrait.jpg', 'images/blog-images/1550283603jasmina-sevic-portrait.jpg'),
(91, 'Pera', 'images/blog-images/1550283625jasmina-sevic-portrait.jpg', 'images/blog-images/1550283625jasmina-sevic-portrait.jpg'),
(92, 'Pera', 'images/blog-images/1550283642jasmina-sevic-portrait.jpg', 'images/blog-images/1550283642jasmina-sevic-portrait.jpg'),
(93, 'Test post test', 'images/blog-images/1550283670jasmina-sevic-portrait.jpg', 'images/blog-images/1550283670jasmina-sevic-portrait.jpg'),
(94, 'Test post test', 'images/blog-images/1550283962jasmina-sevic-portrait.jpg', 'images/blog-images/1550283962jasmina-sevic-portrait.jpg'),
(95, 'Test post test', 'images/blog-images/1550284029jasmina-sevic-portrait.jpg', 'images/blog-images/1550284029jasmina-sevic-portrait.jpg'),
(96, 'Test post test', 'images/blog-images/1550284041jasmina-sevic-portrait.jpg', 'images/blog-images/1550284041jasmina-sevic-portrait.jpg'),
(97, 'Pera', 'images/blog-images/1550287557jasmina-sevic-portrait.jpg', 'images/blog-images/1550287557jasmina-sevic-portrait.jpg'),
(98, 'Pera', 'images/blog-images/1550287646jasmina-sevic-portrait.jpg', 'images/blog-images/1550287646jasmina-sevic-portrait.jpg'),
(99, 'Pera', 'images/blog-images/1550287664jasmina-sevic-portrait.jpg', 'images/blog-images/1550287664jasmina-sevic-portrait.jpg'),
(100, 'Pera', 'images/blog-images/1550287678jasmina-sevic-portrait.jpg', 'images/blog-images/1550287678jasmina-sevic-portrait.jpg'),
(101, 'Pera', 'images/blog-images/1550287689jasmina-sevic-portrait.jpg', 'images/blog-images/1550287689jasmina-sevic-portrait.jpg'),
(102, 'Pera', 'images/blog-images/1550287833jasmina-sevic-portrait.jpg', 'images/blog-images/1550287833jasmina-sevic-portrait.jpg'),
(103, 'Pera', 'images/blog-images/1550287848jasmina-sevic-portrait.jpg', 'images/blog-images/1550287848jasmina-sevic-portrait.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `main_slider`
--

CREATE TABLE `main_slider` (
  `id_slider` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `main_slider`
--

INSERT INTO `main_slider` (`id_slider`, `title`, `category_id`, `image_id`) VALUES
(1, 'Discover the latest 2019 fashion news on Cocco!', 1, 15),
(2, 'The most popular health and beauty trends!', 2, 16),
(3, 'Get the latest travel news, guides, tips and ideas', 3, 17);

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `id_link` int(11) NOT NULL,
  `link_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id_link`, `link_title`, `path`, `parent`, `level`) VALUES
(1, 'Home', 'index.php?page=home', 0, 0),
(2, 'Magazine', 'index.php?page=blog_listing', 0, 0),
(3, 'About', 'index.php?page=about_us', 0, 0),
(4, 'Contact', 'index.php?page=contact', 0, 0),
(5, 'Fashion', 'index.php?page=blog_listing&id_category=1', 2, 1),
(6, 'Health and Beauty', 'index.php?page=blog_listing&id_category=2', 2, 1),
(7, 'Travel', 'index.php?page=blog_listing&id_category=3', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `poll_votes`
--

CREATE TABLE `poll_votes` (
  `id_vote` int(11) NOT NULL,
  `answer` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `count_votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `poll_votes`
--

INSERT INTO `poll_votes` (`id_vote`, `answer`, `count_votes`) VALUES
(1, 'Food', 14),
(2, 'Music', 24);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `post_title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `post_text` text COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `publishing_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id_post`, `post_title`, `post_text`, `summary`, `publishing_date`, `user_id`, `category_id`, `image_id`) VALUES
(1, 'Can Exercise Prevent Depression?', '<p>Ask anyone who’s ever felt better after a workout, and they’ll tell you that exercise and mental health are related. Science backs up that gut feeling. Many studies have found that physical activity is linked to a lower risk of developing depression, and better outcomes for people who have it. But does exercise actually prevent depression, or are people who don’t have depression simply more likely to be active?</p>\n<p>A new study, published in JAMA Psychiatry, sheds some light on that question. Using genetic data from more than 600,000 adults enrolled in multiple genomic association studies, researchers found “more evidence than ever before that physical activity does play an important, and likely causal, role in reducing risk for depression,” says Karmel Choi, a clinical and research fellow in psychiatric and neurodevelopmental genetics at Massachusetts General Hospital and a co-author of the study.</p>\n<p>The researchers looked at one or more of several different measures: people’s genomes, their medical histories of depression and depressive symptoms and how much physical activity they got (as measured by wearable fitness trackers and self reports). Comparing this information, they identified several gene variants linked to a person’s likelihood to exercise, and others associated with a person’s likelihood of developing depression.</p>\n<p>People who had genetic markers linked to a greater likelihood of exercising were less likely to develop depression, but people with markers of depression were not less likely to exercise. This finding, they say, suggests that exercise can protect against depression, but depression does not inherently make someone less likely to exercise.</p><p>“Physical activity is good for a lot of things,” says co-author Dr. Jordan Smoller, director of the Psychiatric and Neurodevelopmental Genetics Unit at Massachusetts General Hospital. “It may have benefits not only for all kinds of aspects of your health, but also, it looks like, your risk of developing depression. The new research is only the latest study to say that exercise may prevent depression. Here’s what else the science says about how exercise affects mental health.</p>\n<h3>Exercise may improve depression treatment</h3>\n<p>Exercise is not a cure for mental health issues, and depression itself can be an obstacle to getting enough physical activity. (Despite the findings of the JAMA study, plenty of anecdotal evidence suggests that many people with depression do find it difficult to exercise, for reasons including antidepressant side effects like fatigue and weight gain, and how difficult it can be to find the energy to exercise.)</p>\n<p>But while exercise is not a perfect solution for depression, studies have shown that it can make a difference. One 2018 review of studies found that physical activity — specifically resistance training, like weight-lifting — can reduce symptoms of depression, perhaps even as effectively as conventional treatments like cognitive behavioral therapy and medication for some people. Other studies have found that virtually any type of workout, from cardio to yoga, can lessen depressive symptoms.</p>\n<p>It’s still unclear how exercise may achieve these effects, but researchers have theories. Rigorous workouts, like weight-lifting and running, may increase blood flow to the brain, potentially altering its structure and cellular makeup. Exercise can also trigger the release of mood-boosting endorphins. Yoga’s emphasis on breath work and mindfulness may also play a part.</p>\n<h3>You don’t have to exercise a lot to see a difference</h3>\n<p>Research is finding that even small amounts of exercise improve both physical and mental health. “If instead of sitting down for 15 minutes you ran for 15 minutes, or if instead of sitting down for an hour you walked briskly for an hour, that’s the level of activity that might actually make a difference,” says Stoller, co-author of the new JAMA study.</p>\n<p>Using data from more than 1.2 million U.S. adults, a large study from 2018 found that people could achieve better mental wellbeing by doing as little as two hours of exercise each week (about 20 minutes per day). It even said that doing too much exercise — more than six hours per week — may backfire psychologically. One study from 2017 came to an even more doable conclusion: that just an hour of exercise a week may be enough to prevent depression.</p>\n<h3>Your workout doesn’t have to be brutal</h3>\nFinding the motivation to exercise can be easier if you expand the definition of what it means to be active. Choi, the JAMA study co-author, says that even “things like taking the stairs, or walking to the store, or washing dishes, or putting away laundry” — which people might not view as exercise — “could add up together to have beneficial effects on depression.”</p>\n<p>In a 2017 study, light exercise like walking was actually more beneficial to mental health than vigorous exercise. The recently updated federal physical activity guidelines also say that all types of movement can contribute to meaningful physical and mental health benefits, even if they’re accumulated in tiny chunks. If getting to the gym feels like a herculean task, start small. Even a short walk can put you on the path to better mental health.</p>', 'Does exercise prevent depression, or are people who don’t have depression simply more likely to be active?', '2019-02-07 20:50:24', 1, 2, 8),
(2, 'Is owning a dog good for your health?', '<p>Dogs really are our best friends, according to a Swedish study that says canine ownership could reduce heart disease. A study of 3.4 million people between the ages of 40 and 80 found that having a dog was associated with a 23% reduction in death from heart disease and a 20% lower risk of dying from any cause over the 12 years of the study. Previous studies have suggested dogs relieve social isolation and depression – both linked to an increased risk of heart disease and early death.</p>\n<h2>The solution</h2>\n<p>Dog owners show better responses to stress (their blood pressure and pulse rates don’t soar), have higher levels of physical activity and slightly lower cholesterol levels. The American Heart Association was sufficiently swayed by a review of dozens of studies to release a statement in 2013 saying that owning a dog “was probably” associated with a reduced risk of heart disease. Their reluctance to more strongly endorse dog ownership is because most studies are what is called observational – researchers note an association, but can’t prove causation. This means that other factors might explain why dog owners are healthier than, say, goldfish owners – for example, perhaps only people who are fit in the first place buy pets that need daily walkies.</p>\n<p>Tove Fall, an epidemiologist and the lead author of this latest study, says they tried their best to allow for any differences in education, existing ill-health and lifestyles between those with and without dogs. The study found the biggest positive impact of having a dog was on people living alone. “It seems that a dog can be a substitute for living with other people in terms of reducing the risk of dying,” says Fall. “Dogs encourage you to walk, they provide social support and they make life more meaningful. If you have a dog, you interact more with other people. If you do get ill and go into hospital and you have a dog, there’s a huge motivation to try to get back home.”</p>\n</p>Of course, getting a dog and watching it from your sofa while you eat fatty food is not going to reduce your risk of heart disease. And a toy dog may look cute, but won’t have any effect either. Fall’s study showed the most health benefits came from having retrievers or pointers. Until her German shorthaired pointer died last year, she ran 10km with her most days. “In Sweden, we have one of the lowest rates of dog ownership in Europe,” says Fall, who has recently got a new puppy. “Maybe this will increase the acceptance that dogs are important to people.”</p>', 'Dogs really are our best friends, according to a Swedish study that says canine ownership could reduce heart disease.', '2019-02-04 20:50:10', 2, 2, 5),
(3, 'Catherine Deneuve\'s auction passes $1m', '<p>The much-anticipated Paris auction of French actor Catherine Deneuve’s couture collection, designed by Yves Saint Laurent, made headlines on Friday for surpassing the $1m mark.</p>\r\n<p>At the event, which took place at Christie’s auction house in the French capital on Thursday, Deneuve sold 129 items of clothing made for her by the designer, with whom she shared a 40-year friendship until his death in 2008.</p>\r\n<p>The sale lasted five hours, with 90% of the lots selling for vastly more than estimated. A pre-sale exhibition held during Paris’s haute-couture fashion week was attended by 4,500 visitors, and online bidding for the sale itself proved one of the most popular the auction house has seen in France over the past five years. By comparison, in 2017, Audrey Hepburn’s personal collection contained 246 lots and achieved £4.6m, while Elizabeth Taylor’s wardrobe raised $2.6m from 67 lots at Christie’s in New York in 2011. Deneuve has not said what the money raised will be used for.</p>\r\n<p>Items featured in the auction included Le Smoking, a highly sought-after custom tuxedo trouser suit made by Saint Laurent for Deneuve in 1982, which fetched €20,000, setting a world record for any le smoking sold at auction. A gold metallic, velvet-draped, evening dress worn by the actor to the Oscars in 2000, when she was nominated for her role in the historical drama Est-Ouest, sold for €33,700 – far surpassing estimates of €2,000-3,000.</p>\r\n<p>Deneuve, who also starred in films such as the 1967 comedy drama Belle de Jour and the 1980 historical drama The Last Metro, had previously stated that it was “not without a certain sadness”, that she was putting her collection of Yves Saint Laurent clothing up for auction, following the sale of her Normandy home where the garments had previously been stored. Another of the items sold was a short beaded dress the actor wore to meet director Alfred Hitchcock, along with The Last Metro writer and director François Truffaut, in 1969. The piece sold for €42,500, exceeding its pre-sale estimate of €3,000-5,000.</p>\r\n<p>Several lots were purchased by fashion institutions and museums. Among them was the Bowes Museum, County Durham, which attracted record number of visitors in 2015 when it hosted the first Yves Saint Laurent exhibition to be held in the UK.</p>\r\n<p>In addition to the haute-couture live auction, which raised a total of $1,025,581 / €900,625 / £785,887, a further 170 items were also available for sale in an online auction, which run until 30 January.</p>', 'Yves Saint Laurent\'s clothes smashed estimates when they were auctioned this week in Paris.', '2019-02-05 20:50:14', 3, 1, 6),
(4, 'Givenchy in Paris: Waight Keller embraces purity', '<p>Haute couture is a real-life industry based on making fairytale dresses. Clare Waight Keller’s credentials in the fairytale dress category were proved beyond doubt on 19 May last year, when the Givenchy wedding gown she designed for Meghan Markle was an instant fashion hit.</p>\r\n<p>Having aced that test, Waight Keller now gets to have some fun. On Tuesday in Paris, in her third haute couture show, she collaborated with Atsuko Kudo, the London-based latex specialist who made Beyonce’s tour costumes, on liquid-shine leggings which were worn under sheer lace dresses in place of the more conventional petticoats. And instead of the exquisite opera clutches that are haute couture’s go-to bag shape, Waight Keller accessorised the collection with giant squishy backpacks edged with angel wings.</p>\r\n<p>“I wanted to clean the house,” the designer said backstage of her minimal white box show set. Paris’ Museum of Modern Art is closed between exhibitions, enabling the Givenchy team to install a clean white shell of polished catwalk, low benches and symmetrical columns in which every wire was boxed out of sight. This being haute couture, even a clean slate is high maintenance: it took four months to design and five days to install, a set designed to look like an empty room.</p>\r\n<p>Last July’s couture outing, held in a formal garden, was an homage to the house founder, Hubert de Givenchy, who died in March 2018. “This time, I wanted the opposite,” Waight Keller said backstage after the show. “After the homage last season I wanted this collection to be as modern as possible. I wanted absolute purity: tailoring, technique, clean lines and saturated colour.”</p>\r\n<p>First on to the catwalk was a tuxedo jacket with one exposed white lapel, a shark fin slice of pure white satin, worn with latex trousers. (“Latex is very couture, because it’s the most bespoke fabric you can get, in terms of a second skin fit,” said the designer after the show.) Next was a sleeveless black crepe blazer with a floor-length hot pink skirt which flicked side to side behind its wearer, like a crocodile’s tail.</p>', 'For her third haute couture show, Clare Waight Keller went ultramodern with latex and a white shell of a catwalk', '2019-02-11 20:50:32', 2, 1, 12),
(5, 'Bali plans tourist tax to tackle plastic pollution', '<p>Authorities in Bali are preparing to introduce a tourist tax to help tackle pollution and waste management on the island, which the Bali Environment Agency says produces 3,500 tonnes of rubbish a day.</p>\r\n<p>According to the Jakarta Post, a new bylaw has been drafted that includes a $10 (£7.60) fee for overseas visitors to the Indonesian island. Governor of Bali, Wayan Koster, has said that revenue from the tax would go towards programmes that help to preserve the environment and Balinese culture. The new tax is being proposed in light of the island’s continuing battle against plastic waste, which pollutes beaches and surrounding waters.</p>\r\n<p>The popular tourist destination, which is roughly the same size as the county of Norfolk, saw nearly 5.7 million visitors in 2017 (mainly from China and Australia), and numbers will continue to rise, according to the national tourism ministry.</p>\r\n<p>Single-use plastics, including shopping bags, styrofoam and plastic straws were banned in December 2018. The ban was aimed at producers, distributors, suppliers and businesses, who have six months to replace items with alternative materials. Those that do not comply could lose their permits. Similar plans are being drafted for Indonesia’s capital, Jakarta.</p>\r\n<p>Koster remains optimistic about visitor numbers, despite the tax. “Tourists will understand. They will be happy to pay it as it will be used to strengthen our environment and culture,” he said. He also stated that the tax would only apply to international tourists and not domestic visitors. How the levy will be collected is still to be confirmed; it could be added to an airline ticket price or paid on arrival at the airport.</p>\r\n</p>The plans have largely received support on the island, on the condition that plans for environmental investment are carried out. “As long as the levy is used for preserving environment and culture, I think it would not cause a decline in tourist numbers,” said Ida Bagus Purwa Sidemen of the Bali chapter of the Indonesian Hotels and Restaurants Association. “However, if there is no real programme following the implementation of the bylaw, tourists may feel disappointed and it would lead to a decrease in tourist arrivals.”</p>\r\n<p>It has been estimated that there will be more plastic in the ocean than fish by 2025, if more isn’t done to tackle the problem at its source. Last October, the European parliament overwhelmingly backed a ban on single-use plastics, with plastic straws, cotton swabs, disposable plastic plates and cutlery to be banned by 2021, and 90% of plastic bottles recycled by 2025.</p>', 'The Indonesian island has already banned plastic bags and straws, and now plans a $10 tourist tax to help clean up its beaches.', '2019-02-13 20:50:37', 2, 3, 14),
(6, 'Largest Underwater Theme Park Is Coming to Bahrain', '<p>Bahrain has a plan to sink a Boeing 747 and turn it into an underwater theme park. The theme park is expected to open this summer. Upon completion, the 25-acre underwater extravaganza claims that it will become the world’s largest eco-friendly underwater theme park.\n<p>In an effort to increase an already rapidly-growing tourism economy, Bahrain is investing in a unique diving site. While some environmentalists have expressed concern that the sunken plane could damage the ecosystem by passing metal into the water, the forces behind the theme park insist that the plane will not harm the environment.</p>\n<p>\"All aircraft surfaces will be subjected to a high-pressure wash with bio-friendly detergents to ensure all post-production coatings, oil and grime are removed,\" a spokesperson for the Bahrain Tourism and Exhibition Agency told CNN Travel. In addition to the plane, the “theme park” will also have a \"replica of a traditional Bahraini pearl merchant’s house, artificial coral reefs and other sculptures fabricated from eco-friendly materials,” Sheikh Abdullah bin Hamad Al Khalifa, president of the Supreme Council for Environment, said in a statement.</p>\n<p>The project is looking to attract divers and marine researchers from all over the world. Bahrain is not the first country to sink a plane and turn it into an underwater destination. In 2006, a Boeing 737 was sunk off the coast of British Columbia, Canada. And in 2016, Turkey sunk an Airbus A300 jet off the coast of the Aegean Sea with the intent to create an artificial reef.</p>', 'Bahrain has a plan to sink a Boeing 747 and turn it into an underwater theme park. The theme park is expected to open this summer.', '2019-02-08 20:50:26', 2, 3, 9),
(7, 'You Only Need 5 Minutes in Nature to Improve Your Mood', '<p>In a study published in the Journal of Positive Psychology, researchers found that participants who spent just five minutes sitting in nature experienced an increase in positive emotions. Researchers conducted two studies before coming to this conclusion.</p>\n<p>In the first study, a total of 123 participants from the university’s psychology department participant pool were assigned either to an outdoor location (an urban park on the border of the campus) or an indoor location (a windowless laboratory room). Participants were asked to put away all electronic devices and focus on their setting while remaining seated for five minutes.</p>\n<p>Each person was then asked to scale a range of emotions that included both hedonic moods (emotions associated with comfort and pleasure) and self-transcendent emotions (including feelings of awe, gratitude, wonder, and a sense that you are part of something greater than yourself), both before and after being taken to each setting.\nWhen it came to hedonic emotions, those sitting outside experienced an increase before and after the test, while those in the indoor setting did not. Similarly, when it came to self-transcendent emotions, those in the outdoor setting experienced a greater increase than those inside.</p> <p>Results also indicated a sense of awe evoked by spending just five minutes in the outdoor setting. Researchers then conducted a second study to see if increasing the duration spent in the natural setting would correlate with a larger increase in these emotions. For the second study, 70 participants from the university’s psychology department pool were asked to spend 15 minutes (without electronic devices) seated in both settings. For the second study, researchers also included a scale for participants to score negative emotions including stress, depression, and anxiety on a four-point scale.</p>\n<p>While increasing the duration of the time spent in nature did not increase the amount of positive emotions experienced, the study also revealed that negative emotions were lowered in both settings with five minutes of rest.</p>\n<p>“There are two important take homes; the first I emphasize to all my students these days — when you need an emotional boost, the fastest and easiest way is to spend a few minutes with nature,” one of the study’s authors, Katherine D. Arbuthnott, told PsyPost. Arbuthnott noted that being outside is the best option, but looking at photos of natural scenes can also help.</p>\n<p>“The second is that, since contact with nature is so beneficial to our emotional health, preserving our local natural spaces is an important public health goal,” she added. The study does have some limitations, including that it only examined short exposures of up to 15 minutes in a small urban park, but its results are a nod to the importance of green spaces in urban planning.</p>', 'Spending just five minutes in nature can quickly improve your mood, researchers from the University of Regina have found.', '2019-02-02 20:02:02', 2, 2, 3),
(8, 'Valentino Blossoms at Spring 2019 Couture Show', '<p>The delicate nature of Valentino’s couture gowns prove the genuine passion designer Pierpaolo Piccioli has for them. Opening with a rosy silk number that enshrined the model’s head with a dreamlike, textured hood mimicking the folds of a rose, the precedent was set for an elaborate and ephemerally lavish collection. The subsequent looks were more conventional, but not less intricate. Understandably, the show left many celebrities in the front row awestruck, even moving Celine Dion to tears.</p>\n<p>Later looks relied on less surreal but still playful elements. The show featured a compelling color block component, one of the more daring aspects of the collection: dazzling turquoise pants paired with a saffron cape, persimmon colored trousers accompanied by griseous outerwear, a powder blue blouse with a silken seashell pink skirt.</p>\n<p>But the predominant theme was an unorthodox approach to florals, heightened by the skills of Pat McGrath whose plantlike eye makeup was integral to the show. The collection served as an exploration of the various uses of florals in fashion. Nearly all of the gowns employed a floral print of some sort, though these prints varied greatly, from cascading florets that brought to mind 70s prairie dresses to dimensional scarlet and pink blooms reminiscent of Japanese cherry blossoms. But, with an abundance of ruffles and billowing dresses, some looks even mirrored the literal form of flowers, as well as their vivid hues. Voluminous sleeves and tiered dresses evoked Georgia O’Keefe-esque imagery-- a celebration of softness and femininity punctuated by staccato notes of almost provocative vibrancy.</p>\n</p>The closing was undoubtedly the strongest moment in the show, with the iconic Naomi Campbell making her return to the Valentino runway in a semi-sheer, black, ruffled gown. Though the collection was perhaps not particularly inventive, it was dramatic and unexpected. The emotional response it elicited from the audience is a testament to the care with which the couture collection was made.</p>', 'The delicate nature of Valentino’s couture gowns prove the genuine passion designer Pierpaolo Piccioli has for them.', '2019-02-12 20:50:34', 1, 1, 13),
(9, 'The best cities in Europe for a city break', '<p>A survey of the best cities in Europe for a city break has jointly placed Krakow in Poland and Valencia in Spain at the top. The Which? Travel survey saw 4353 members ranking the cities based on a combination of historic charm, cultural interest, good places to eat and drink and excellent value for money. They also rated accommodation, shopping and ease of getting around to give a complete picture of the city in question.</p>\n<p>Both Krakow and Valencia scored 91%, and the rest of the top ten comprised of 3. Budapest 4. Bologna 5. Berlin 6. Seville 7. Barcelona 8. Vienna 9. Funchal and 10. Amsterdam. “Krakow topped our table with its Renaissance palaces and Baroque churches on every corner, not to mention alfresco cafes strewn across street upon street of cobblestones,” says Which? Travel. “But the best bit? Krakow continues to resist the urge to shake down visitors with extortionate prices.”</p>\n<p>Krakow was the only city in the survey to score five stars for value for money. Not only is the average hotel price just £63 ($82.13) per room, per night, but eating out can also be very reasonable. “Avoid the main square rip offs and you’ll get a good meal for less than ten pounds ($13.04), and a pint of beer for two pounds ($2.61).”</p>\n<p>Sharing the top spot with Krakow, Valencia was described as being quirky, innovative and full of surprises. “Valencia is also far cheaper than Spain’s other big hitters – Madrid and Barcelona,” says Which? Travel. “You can enjoy a glass of rioja for as little as €2.50 ($2.84). And a decent two or three-course menu del dia (set menu) will set you back around €12 ($13.63).”</p>', 'A survey of the best cities in Europe for a city break has jointly placed Krakow in Poland and Valencia in Spain at the top.', '2019-02-10 20:50:30', 3, 3, 11),
(10, 'Airbnb makes amend in its work', '<p>Accused of draining the life out of picturesque towns and cities by encouraging a flood of tourists, Airbnb is seeking to make amends, albeit on a modest scale, with a new project in the sultry south of Italy.\nThe accommodation platform wants to recruit four people to move to the village of Grottole in the region of Basilicata for a three-month “Italian sabbatical”. They will be expected to become part of the fabric of the community and to help revive the village’s ailing fortunes. Like many places in Italy, particularly in the south, Grottole suffers from chronic depopulation. So many locals have left that the population is now down to 300 and there are around 600 empty homes in the town.</p>\n<p>The chosen candidates will enjoy an all-expenses-paid stay in the village, where they will be responsible for helping a local NGO, Wonder Grottole, revitalise the community. The successful applicants will be responsible for renovating buildings, maintaining the village’s vegetable garden and hosting Airbnb Experiences, which go beyond the usual bed and breakfast concept by incorporating tours and classes for visitors.  </p>\n<p>In exchange, the candidates will be offered free accommodation, up to €900 in expenses per month and given the opportunity to enrol in language courses and cookery classes. The deadline for applications is February 17 and the placement will take place this summer.</p>\n<p>“Our dream is to repopulate the historic centre of Grottole,” said Silvio Donadio, a founder of Wonder Grottole. “Within 10 years we’d like to see the village full of people from different cultures, perfectly integrated with the local community.”</p>\n<p>Rocco Filomeno, a local beekeeper, said: “People who arrive here from big cities will find an ancient village surrounded by woods and meadows. We’ll encourage them to leave behind their old lives and to connect with our way of life.”</p>\n<p>Francesco De Giacomo, the mayor, hopes that the project will “revitalise the social fabric” of Grottole, which is all but untouched by tourism.</p>\n<p>The village lies just west of Matera, a stunning town known for its centuries-old cave-dwellings known as “sassi”, which is poised to welcome tens of thousands of visitors as European capital of culture for 2019, with the inauguration to take place on Saturday.</p>\n<p>Announcing the Grottole initiative, Joe Gebbia, Airbnb co-founder and chief product officer, said: “Italy is an extraordinary country with a strong and vibrant rural community, countless hilltop villages and a passionate and welcoming culture. We want to help preserve these communities so they continue for generations to come.”</p>\n<p>Dying towns and villages across Italy have come up with a variety of novel solutions to avoid extinction. Some have offered empty houses for sale for just one euro, including the hilltop towns of Gangi and Sambuca in Sicily, on condition that newcomers spend substantial sums restoring the properties.</p>\n<p>Others, including Riace and Acquaformosa in Calabria, have welcomed migrants and refugees in a bid to reverse population decline and inject new life into their ageing communities. There are also ghost villages which have experimented with a model known as the “albergo diffuso”, literally “spread-out hotel”, in which the whole place is turned into accommodation for tourists.</p>\n<p>The best-known example is Santo Stefano di Sessanio, a stone village in the mountains of Abruzzo, in central Italy, which was turned into a spread-out hotel by Daniele Kihlgren, a Swedish-Italian businessman.</p>\n<p>The model he pioneered has since been adopted by other villages across Italy.</p>', 'Airbnb is seeking to make amends, albeit on a modest scale, with a new project in the sultry south of Italy.', '2019-02-09 20:50:28', 1, 3, 10),
(11, 'Four vitamins and minerals to help you to sleep better', '<p>While for some sleep is easily achieved, others find they either lack the ability to fall asleep or find themselves in a disturbed sleep pattern and struggle to drift back off to sleep again. To help you get your forty winks one expert recommends keeping certain vitamins and minerals topped up.\n\nSleep is very important and the average adult requires seven to nine hours of sleep per night. Ongoing sleeplessness can have a huge impact on the body and is often associated with metabolic disorders, such as obesity and diabetes, cardiovascular diseases and mental disorders, such as anxiety and depression. Stress is known to be a factor for many who struggle with sleep, but other factors could also play a part such as hormone imbalances, medications, poor sleep hygiene, and vitamin and mineral deficiencies. Claire Barnes, nutritional therapist at Bio-Kult, recommends four vitamins and minerals to help you drift off into slumber.</p>\n\n<h3>VITAMIN D</h3>\n<p>A review of nine studies involving over 9,000 participants that had previously been conducted on vitamin D levels and sleep were analysed last year. They found that those who were vitamin D deficient had a significant risk of sleep disorders, poor sleep quality, short sleep duration and sleepiness.\n\nClaire explained: “We can store vitamin D, which our bodies can synthesise from the sunlight, therefore it is important during the spring and summer months to expose your skin to at least 15 minutes of sunshine each day.\n\n“Build up vitamin D levels by getting outside as much as possible during the warmer seasons and eating plenty of dietary sources of vitamin D such as oily fish, eggs and organic beef liver all year round.”</p>\n\n<h3>MAGNESIUM</h3>\n<p>Magnesium is vital for the healthy functioning of the parasympathetic nervous system, which allows your body to achieve a calm and relaxed state, according to Claire.\n\nShe added: “Magnesium also helps to support levels of GABA, the calming neurotransmitter, which promotes sleep. During times of stress, magnesium levels can become depleted, many who suffer with stress often report that their sleep is also disturbed, so may benefit from increasing their magnesium levels.\n\n“Studies have shown that dietary magnesium can improve insomnia symptoms. Good sources of magnesium can be found in dark, green leafy vegetables, such as spinach and kale, legumes, nuts and seeds.”</p>\n\n<h3>ZINC</h3>\n<p>Recent evidence suggests that zinc is involved in the regulation of sleep. A study of 890 healthy individuals found that those having the optimum hours of sleep per night (seven to nine hours) had the highest levels of zinc in their blood.\n\nClaire said: “Similar results were found in a later study where they tested zinc and copper levels in 126 adult women’s blood and hair, their results suggested that higher zinc and copper levels may be involved in sleep duration.\n\n“Oysters are the best source of zinc from foods; however red meat, poultry and other seafood, such as crab and lobster are also good sources. Vegetarian sources include beans, nuts and wholegrains.”<p>\n\n<h3>LIVE BACTERIA</h3>\n<p>Research suggests that your gut bacteria may impact on whether you get a good night’s sleep. For example, various bacterial metabolites made in the gut appear to be inducers of REM sleep and may impact on the transition into deeper sleep.\n\nBut Claire warned: “However if levels of these metabolites get too high, this can result in disrupted sleep.\n\n“Evidence also indicates the microbiome is intrinsically linked to mood and stress response via the gut-brain-axis. Stress and mood disorders such as anxiety and depression can negatively impact on sleep, and live bacteria supplements, (which act to increase levels of beneficial strains of bacteria in the gut), have been shown in studies to be of benefit in these conditions.\n\n“The microbiome appears to be sensitive to our sleep and eating patterns, with periods of disrupted sleep shown to negatively impact on the composition of bacteria in the gut and the digestives system’s own circadian rhythm.\n\n“To help support a healthy community of bacteria in the gut, its best to stick to a regular routine of eating and sleeping where possible, eat a diet high in fibre from fruit and vegetables (the food source for our gut bacteria) and take a good quality live bacteria supplement, such as Bio-Kult Advanced Multi-Strain formula (containing 14 different strains), on a daily basis.”</p>', 'Ongoing sleeplessness can have a huge impact on the body and is often associated with metabolic disorders.', '2019-02-06 20:50:17', 2, 2, 7),
(12, 'Vitamin D deficiency and how to avoid it', '<p>Vitamin D deficiency is particularly common during the winter months, when sunlight and daylight hours are reduced. But adding cheese to your daily diet could help to top up your vitamin D levels from food sources. How much cheese should you be eating every day, and should you consider taking ‘sunshine’ supplements?\nVitamin D is crucial for the body, as it helps to keep your bones, teeth and muscles healthy, according to the NHS. Without enough vitamin D, it’s difficult to regulate the amount of calcium or phosphate in the body. A severe lack of the vitamin may even lead to bone deformities, rickets, or osteomalacia. You could lower your risk of a vitamin D deficiency by \neating cheese, it’s been claimed.\nCheese contains small amounts of vitamin D, along with other some other common foods, including eggs and yogurt.</p>\n<p>There can be up to 118IU of vitamin D in a 100 g portion of cheese, according to the National Institutes of Health. Everyone should aim to get at least 400IU (10mcg) of vitamin D in a single day, it added. So, it’s not recommended to get your daily recommended allowance for vitamin D from cheese.</p>\n<p>“Vitamin D is a fat-soluble vitamin that is naturally present in very few foods, added to others, and available as a dietary supplement,” said the National Institutes of Health. “Very few foods in nature contain vitamin D. The flesh of fatty fish [such as salmon, tuna, and mackerel] and fish liver oils are among the best sources. “Small amounts of vitamin D are found in beef liver, cheese, and egg yolks.”</p> <p>Eating cheese could also help to lower your risk of cancer, scientists have claimed. You could slash your chances of developing colorectal cancer by eating at least 57g of cheese every day. But, certain cheese can be high in fat and sugar, and may not be great for your heart. If you do decide to eat more cheese, it’s best to opt for a reduced-fat version, said charity the British Heart Foundation. “Cheddars vary in flavour depending on the length of ageing and their origin,” it said. The reduced-fat version isn’t low in fat or salt but contains 30 per cent less fat than the standard variety so it’s a good switch to make. “On average it contains 22 per cent fat [14 per cent saturated] compared to standard Cheddar which contains about 35 per cent fat [22 per cent saturated].</p>', 'Vitamin D deficiency is particularly common during the winter months, when sunlight and daylight hours are reduced.', '2019-02-03 20:50:07', 3, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id_quote` int(11) NOT NULL,
  `quote_text` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id_quote`, `quote_text`, `author`, `category_id`) VALUES
(1, 'In order to be irreplaceable one must always be different.', 'Coco Chanel', 1),
(2, 'Beauty is power; a smile is its sword.', 'John Ray', 2),
(3, 'A man of ordinary talent will always be ordinary, whether he travels or not; but a man of superior talent will go to pieces if he remains forever in the same place.', 'Wolfgang Amadeus Mozart', 3),
(4, 'What you wear is how you present yourself to the world, especially today, when human contacts are so quick. Fashion is instant language.', 'Miuccia Prada', 1),
(5, 'The journey not the arrival matters.', 'T.S. Eliot', 3),
(6, 'I don\'t like standard beauty. There is no beauty without strangeness', 'Karl Lagerfeld', 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `role_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_role`, `role_title`) VALUES
(1, 'admin'),
(2, 'editor'),
(3, 'commentator');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `biography` text COLLATE utf8_unicode_ci,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(1) NOT NULL DEFAULT '1',
  `image_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `email`, `pass`, `biography`, `title`, `registration_date`, `active`, `image_id`, `role_id`, `user_vote`) VALUES
(1, 'Jasmina', 'Sevic', 'jasmina@gmail.com', '6e79cd1d129ad799761b8124327de527', 'Jasmina Šević graduated from the Faculty of Political Science, Department of Journalism and Communication Studies in 2013. Currently, she is on her final year at the ICT College of Vocational Studies in Belgrade. She made this project for Web programming PHP 2 exam.', 'Editor-in-Chief', '2019-01-30 19:38:47', 1, 1, 1, 0),
(2, 'Peter', 'Loreti', 'peter@gmail.com', '51dc30ddc473d43a6011e9ebba6ca770', 'Peter Loreti is a writer and editor for Cocco Magazine.', 'Senior Editor', '2019-01-30 19:38:51', 1, 2, 2, 0),
(3, 'Sofie', 'Kaganoff', 'sofie@gmail.com', '3e2266ae336f00a243b5299201a06157', 'Sofie Kaganoff is a writer and editor for Cocco Magazine.', 'Writer', '2019-01-30 19:38:57', 1, 2, 2, 0),
(68, 'Laza', 'Lazic', 'laza@gmail.com', '52c7dd7ca64782de0ba4dfa4bc9d803e', 'Laza Lazic biography', 'Editor', '2019-02-16 03:52:18', 1, 85, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `main_slider`
--
ALTER TABLE `main_slider`
  ADD PRIMARY KEY (`id_slider`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`id_link`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `poll_votes`
--
ALTER TABLE `poll_votes`
  ADD PRIMARY KEY (`id_vote`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id_quote`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `image_id` (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `main_slider`
--
ALTER TABLE `main_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `poll_votes`
--
ALTER TABLE `poll_votes`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id_quote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `main_slider`
--
ALTER TABLE `main_slider`
  ADD CONSTRAINT `main_slider_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id_category`),
  ADD CONSTRAINT `main_slider_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `images` (`id_image`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id_category`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `posts_ibfk_3` FOREIGN KEY (`image_id`) REFERENCES `images` (`id_image`);

--
-- Constraints for table `quotes`
--
ALTER TABLE `quotes`
  ADD CONSTRAINT `quotes_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id_category`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id_role`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `images` (`id_image`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
