-- MySQL dump 10.14  Distrib 5.5.65-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: db_bongobondhu
-- ------------------------------------------------------
-- Server version	5.5.65-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `articleHint` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `article` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'Bangabandhu in Language movement','1.jpg','The background of the Language Movement is huge. It can be said in this background a greater figure was Sheikh Mujibur Rahman. The Language Movement and Bangabandhu, ...','<div class=\"col-lg-12 col-md-8\" style=\"margin: 0px; padding: 0px 15px; width: 1140px; color: rgb(33, 37, 41); font-size: 16px;\"><p style=\"margin: 30px 0px 0px; padding: 0px; font-family: arial; line-height: 26px; font-size: 17px; text-align: justify;\">The background of the Language Movement is huge. It can be said in this background a greater figure was Sheikh Mujibur Rahman. The Language Movement and Bangabandhu, Bangabandhu and Liberation Movement, Bangabandhu and Bangladesh all are knitted together so closely that one cannot be imagined without the presence of others. So, we must recall the name Bangabandhu we discuss regarding these issues. Before the inception of Pakistan in 1947, the true self of its proposed leaders had been revealing and simultaneously the youth of this part of the world started to think about protecting their own rights. The first meeting was held at a room of Siraj-ud-Daula hotel in Dhaka. A handful of people like- Kazi Idris, Sheikh Mujibur Rahman, Shahidullah Kaiser, Ataur Rahman from Rajshahi, Akhlakur Rahman and few others were present. The topic of discussion was- what is the responsibility of youth of East Bengal after Pakistan is established? A few days before that, Doctor Ziauddin, the Vice Chancellor of Aligarh Univesity said in an essay that the state language of Pakistan shall be Urdu.</p><p style=\"margin: 30px 0px 0px; padding: 0px; font-family: arial; line-height: 26px; font-size: 17px; text-align: justify;\">Doctor Muhammad Shahidullah gave a tough reply. In an essay published in Azad, he said in opposition to Doctor Ziauddin’s proposal he said, if proposed Pakistan has only one state language, according to democracy Bangla, the language of 56% people should be it. If there are options of more than one language the Urdu might be considered. The words of Shahidullah stirred the erstwhile youth community who used to hold the progressive and non-communal political thoughts. In a consequence, the meeting of Siraj-ud-Daula hotel was held. It was decided that no sooner Pakistan will be established a youth conference of the non-communal East Bengal must be addressed. The leaders of the conference reached Dhaka and communicated with the student and youth leaders of Dhaka. Activists’ council of East Pakistan was addressed on 6-7 September 1947. The council was held at the residence of Dhaka Municipality’s vice chairman Khan Abul Hasnat because the government of Khawaja Nazimuddin and its beneficiary goons created an obstacle. On September 7, ‘East Pakistan Democratic Youth League’ was born.</p></div><div class=\"col-lg-4 col-md-4 pt-5\" style=\"margin: 0px; padding-right: 15px; padding-bottom: 0px; padding-left: 15px; width: 380px; flex-basis: 33.3333%; max-width: 33.3333%; color: rgb(33, 37, 41); font-size: 16px;\"><img class=\"paraShape\" src=\"file:///F:/Laravel%20Projects/bongobondhu/images/paraShape.png\" alt=\"paraShape\" style=\"margin: 15px 0px 0px; padding: 0px; display: block;\"><h4 style=\"margin-top: 0px; margin-bottom: 0px; padding: 20px 0px 0px; font-weight: lighter; line-height: 40px; font-size: 23px;\">If Mujib vai did not reach Dhaka neither the hartal nor the picketing on 11th March would take place. Strike took place on 11th March, picketing was done in front of the secretariat and from there student leader Sheikh Mujibur Rahman was arrested along with his other comrades Oli Ahad, Shamsul Huq, Shawkat Ali, etc.</h4></div><div class=\"col-lg-8 col-md-4\" style=\"margin: 0px; padding: 0px 15px; width: 760px; flex-basis: 66.6667%; max-width: 66.6667%; color: rgb(33, 37, 41); font-size: 16px;\"><p style=\"margin: 30px 0px 0px; padding: 0px; font-family: arial; line-height: 26px; font-size: 17px; text-align: justify;\">The then-student leader Bangabandhu Sheikh Mujibur Rahman read the announcement. He said after raising the proposal regarding language: ‘The East Pakistan Activists’ conference proposes that, Bangla should become the medium of writing and language of legal courts. Let the discussion and choosing the state language of Pakistan to be endowed upon the people and the decision of the people will be accepted as final. This is how the first demand regarding language was raised. And demand for the right of getting education free primary and secondary education through mother tongue was raised. Also, demand for establishing the education system in accordance with the national and cultural tradition was raised. The demand that was raised about the language in the Activists’ Council of East Pakistan in 1947 was echoed by a thousand voices in the first part of March 1948. Dhirendranath Dutta proposed to set Bangla as state language on 23rd February at Pakistan’s constituent assembly and for that proposal, Liaquat Ali Khan reprimanded him openly. He and Raja Ghazanfar Ali Khan expressed to set Urdu as the state language. East Pakistan’s representative Khawaja Nazimuddin and Maulvi Tamizuddin Khan opposed the proposal of making Bangla as the state language. Nazimuddin said, most of East Pakistan’s inhabitants want Urdu as the state language. The Rashtrabhasha Sangram Parishad was formed in Dhaka. A student strike on 11th March was called upon. On 10th March a meeting of Rashtrabhasha Sangram Parishad was held. In the meeting the people who wanted to compromise started to conspire. When many including the convener of Rashtrabhasha Sangram Parishad were confused about compromise with the government, a loud voice said, “Who has given the proposal of compromise with the government? If not so, tomorrow’s strike will go on, and there will be picketing in front of the secretariat.” Student leader Sheikh Mujib was supported by Oli Ahad, Mohammad Toaha, Shawkat Ali of Mogoltuli, Shamsul Huq.</p></div><div class=\"col-lg-12 col-md-8\" style=\"margin: 0px; padding: 0px 15px; width: 1140px; color: rgb(33, 37, 41); font-size: 16px;\"><p style=\"margin: 30px 0px 0px; padding: 0px; font-family: arial; line-height: 26px; font-size: 17px; text-align: justify;\">The conspiracy of the people who wanted to compromise was ruined. On an interview, Oli Ahad said, “If Mujib vai did not reach Dhaka neither the hartal nor the picketing on 11th March would take place. Strike took place on 11th March, picketing was done in front of the secretariat and from there student leader Sheikh Mujibur Rahman was arrested along with his other comrades Oli Ahad, Shamsul Huq, Shawkat Ali, etc. The movement of 11th March was spread throughout East Pakistan. As the situation was getting grave Khawaja Nazimuddin raised about the compromise. After a long discussion with Rashtrabhasha Sangram Parishad, the eight-point compromise agreement was signed. As most of the Language Movement leaders including Bangabandhu were in prison the draft of the agreement was taken there to take their consent. According to the condition, leaders were freed on 15th March. After being freed from prison Bangabandhu saw that the student-people, who were angry with the atrocity of police and government, were adamant to fulfill their demand. Sheikh Mujib could comprehend the pulse of people He besieged the manager meeting at University with student-people on next day. Police charged baton and threw tear gas there but the agitated student society stood firm against all the conspiracy under the leadership of Sheikh Mujib on that day.</p><p style=\"margin: 30px 0px 0px; padding: 0px; font-family: arial; line-height: 26px; font-size: 17px; text-align: justify;\">On 4th February 1952 student strike was observed in the entire educational institute in Dhaka. Mujib was in prison then. Thousands of student-people rallied around the city with processions and everyone gathered under the Beltola to hear the next announcement. Sheikh Mujib conveyed his message through Shamsul Haque Chowdhury, Golam Maula, Abdus Samad Azad. He gave the message, supported the countrywide strike of 21st. He also added advice to besiege parliament on that day through the procession and collect signatures from the member of parliaments in favor of Bangla language. He further informed he and Mohiuddin Ahmed will go for a fast-unto-death on demand of freeing state prisoner. The hartal of Ekushey February will be observed from Beltola. After the notice of fast-unto-death, Bangabandhu was taken to Faridpur prison on 16th February. During his journey, many people including Mr. Shamsuddoha met with him at the steamer port. Bangabandhu informed them about the fast-unto-death of him and Mohiuddin. He requested that during the hartal of 21st February, after a procession the parliament to be besieged and signatures for the support of Bangla language are taken from the members. A meeting was held on 19th February at the University of Dhaka with the demand of freeing all the state prisoners including Sheikh Mujib. Strong support for 21st was stated from that meeting. The fierce agitation of 21st cornered the Muslim League government. They were forced to free Bangabandhu. The free Bangabandhu invested all his power to flourish and strengthen the anti-autocratic, democratic spirit of language movement. He ordered to efface the word ‘Muslim’ from East Pakistan Muslim Student League to transform it into a secular Student organization. Under the chairmanship of AHM Kamruzzaman, the word ‘Muslim’ was effaced from the tradition Student League to transform it into a secular student organization. On 1955 under his leadership at the Activists’ Council of Awami Muslim League, a recommendation was made to make Awami League a secular political organization. On 1955 Awami League was converted. Bangabandhu fulfilled his vow of secular politics that he took in 1953 after the procession of 21st February meeting in just two years. He created a flow of secular politics throughout the country and its consequence was the liberation war that gave the birth of an independent Bangladesh, the constitution of 72, the main principle of secularism, the banishment of communal politics.</p><p style=\"margin: 30px 0px 0px; padding: 0px; font-family: arial; line-height: 26px; font-size: 17px; text-align: justify;\">Bangabandhu took part in the Language Movement held and held its spirit. He had the determination for earning the recognition and augments the esteem of mother tongue. The spirit was always active to establish a separate state for Bangla spoken people. Till his death, he did not comprise it. The nation will never forget his role.</p></div>','Gaziul Haque',NULL,'2020-03-08 13:25:17'),(8,'শেখ মুজিবুর রহমান','8.png','শেখ মুজিবুর রহমান (১৭ মার্চ ১৯২০ - ১৫ আগস্ট ১৯৭৫), সংক্ষিপ্তাকারে শেখ মুজিব বা মুজিব, ছিলেন','<div class=\"container\" style=\"margin-top: 0px; margin-bottom: 0px; padding-top: 0px; padding-bottom: 0px; width: 1140px; color: rgb(33, 37, 41); font-size: 16px;\"><div class=\"share-icons text-center\" style=\"margin: 0px; padding: 0px;\"><div class=\"addthis_inline_share_toolbox_her8\" data-url=\"http://94.254.0.51/article/details/8\" data-title=\"Bongobondhu\" style=\"margin: 0px; padding: 0px; clear: both;\"><div id=\"atstbx\" class=\"at-resp-share-element at-style-responsive addthis-smartlayers addthis-animated at4-show\" aria-labelledby=\"at-c2cc8c53-152b-4eeb-bb51-e73375ae1ecd\" role=\"region\" style=\"margin: 0px; padding: 0px; position: relative; font-size: 0px; line-height: 0; animation-fill-mode: both; animation-timing-function: ease-out; animation-duration: 0.3s; opacity: 1 !important;\"><div class=\"at-share-btn-elements\" style=\"margin: 0px; padding: 0px;\"><a role=\"button\" tabindex=\"0\" class=\"at-icon-wrapper at-share-btn at-svc-facebook\" style=\"margin: 0px 2px 5px; padding: 5px; color: rgb(255, 255, 255); background-color: rgb(34, 34, 34); display: inline-block; overflow: hidden; line-height: 0; transition: all 0.2s ease-in-out 0s; border: 0px; font-family: &quot;helvetica neue&quot;, helvetica, arial, sans-serif; border-radius: 16px;\"><span class=\"at4-visually-hidden\" style=\"margin: 0px; padding: 0px; display: inline-block; position: absolute; clip: rect(1px, 1px, 1px, 1px); border: 0px; overflow: hidden;\"></span><span class=\"at-icon-wrapper\" style=\"margin: 0px; padding: 0px; display: inline-block; overflow: hidden; cursor: pointer; float: left; line-height: 20px; height: 20px; width: 20px;\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 32 32\" version=\"1.1\" role=\"img\" aria-labelledby=\"at-svg-facebook-1\" style=\"fill: rgb(255, 255, 255); width: 20px; height: 20px;\" class=\"at-icon at-icon-facebook\"><g><path d=\"M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z\" fill-rule=\"evenodd\"></path></g></svg></span></a><a role=\"button\" tabindex=\"0\" class=\"at-icon-wrapper at-share-btn at-svc-messenger\" style=\"margin: 0px 2px 5px; padding: 5px; color: rgb(255, 255, 255); background-color: rgb(34, 34, 34); display: inline-block; overflow: hidden; line-height: 0; transition: all 0.2s ease-in-out 0s; border: 0px; font-family: &quot;helvetica neue&quot;, helvetica, arial, sans-serif; border-radius: 16px;\"><span class=\"at4-visually-hidden\" style=\"margin: 0px; padding: 0px; display: inline-block; position: absolute; clip: rect(1px, 1px, 1px, 1px); border: 0px; overflow: hidden;\"></span><span class=\"at-icon-wrapper\" style=\"margin: 0px; padding: 0px; display: inline-block; overflow: hidden; cursor: pointer; float: left; line-height: 20px; height: 20px; width: 20px;\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 32 32\" version=\"1.1\" role=\"img\" aria-labelledby=\"at-svg-messenger-2\" style=\"fill: rgb(255, 255, 255); width: 20px; height: 20px;\" class=\"at-icon at-icon-messenger\"><g><path d=\"M16 6C9.925 6 5 10.56 5 16.185c0 3.205 1.6 6.065 4.1 7.932V28l3.745-2.056c1 .277 2.058.426 3.155.426 6.075 0 11-4.56 11-10.185C27 10.56 22.075 6 16 6zm1.093 13.716l-2.8-2.988-5.467 2.988 6.013-6.383 2.868 2.988 5.398-2.987-6.013 6.383z\" fill-rule=\"evenodd\"></path></g></svg></span></a><a role=\"button\" tabindex=\"0\" class=\"at-icon-wrapper at-share-btn at-svc-twitter\" style=\"margin: 0px 2px 5px; padding: 5px; color: rgb(255, 255, 255); background-color: rgb(34, 34, 34); display: inline-block; overflow: hidden; line-height: 0; transition: all 0.2s ease-in-out 0s; border: 0px; font-family: &quot;helvetica neue&quot;, helvetica, arial, sans-serif; border-radius: 16px;\"><span class=\"at4-visually-hidden\" style=\"margin: 0px; padding: 0px; display: inline-block; position: absolute; clip: rect(1px, 1px, 1px, 1px); border: 0px; overflow: hidden;\"></span><span class=\"at-icon-wrapper\" style=\"margin: 0px; padding: 0px; display: inline-block; overflow: hidden; cursor: pointer; float: left; line-height: 20px; height: 20px; width: 20px;\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 32 32\" version=\"1.1\" role=\"img\" aria-labelledby=\"at-svg-twitter-3\" style=\"fill: rgb(255, 255, 255); width: 20px; height: 20px;\" class=\"at-icon at-icon-twitter\"><g><path d=\"M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336\" fill-rule=\"evenodd\"></path></g></svg></span></a><a role=\"button\" tabindex=\"0\" class=\"at-icon-wrapper at-share-btn at-svc-compact\" style=\"margin: 0px 2px 5px; padding: 5px; color: rgb(255, 255, 255); background-color: rgb(34, 34, 34); display: inline-block; overflow: hidden; line-height: 0; transition: all 0.2s ease-in-out 0s; border: 0px; font-family: &quot;helvetica neue&quot;, helvetica, arial, sans-serif; border-radius: 16px;\"><span class=\"at4-visually-hidden\" style=\"margin: 0px; padding: 0px; display: inline-block; position: absolute; clip: rect(1px, 1px, 1px, 1px); border: 0px; overflow: hidden;\"></span><span class=\"at-icon-wrapper\" style=\"margin: 0px; padding: 0px; display: inline-block; overflow: hidden; cursor: pointer; float: left; line-height: 20px; height: 20px; width: 20px;\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 32 32\" version=\"1.1\" role=\"img\" aria-labelledby=\"at-svg-addthis-4\" style=\"fill: rgb(255, 255, 255); width: 20px; height: 20px;\" class=\"at-icon at-icon-addthis\"><g><path d=\"M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z\" fill-rule=\"evenodd\"></path></g></svg></span></a></div></div></div></div></div><div class=\"text_detail\" style=\"margin: 0px; padding: 0px; color: rgb(33, 37, 41); font-size: 16px;\"><div class=\"container\" style=\"margin-top: 0px; margin-bottom: 0px; padding-top: 0px; padding-bottom: 0px; width: 1140px;\"><div class=\"row\" style=\"margin: 0px -15px; padding: 0px;\"><p style=\"margin: 0.5em 0px; padding: 0px; font-family: sans-serif; line-height: 26px; font-size: 17px; text-align: justify; color: rgb(32, 33, 34);\"><span style=\"margin: 0px; padding: 0px; font-weight: bolder;\">শেখ মুজিবুর রহমান</span>&nbsp;(১৭ মার্চ ১৯২০ - ১৫ আগস্ট ১৯৭৫), সংক্ষিপ্তাকারে&nbsp;<span style=\"margin: 0px; padding: 0px; font-weight: bolder;\">শেখ মুজিব</span>&nbsp;বা&nbsp;<span style=\"margin: 0px; padding: 0px; font-weight: bolder;\">মুজিব</span>, ছিলেন&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AC%E0%A6%BE%E0%A6%82%E0%A6%B2%E0%A6%BE%E0%A6%A6%E0%A7%87%E0%A6%B6\" title=\"বাংলাদেশ\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">বাংলাদেশের</a>&nbsp;প্রথম&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%B0%E0%A6%BE%E0%A6%B7%E0%A7%8D%E0%A6%9F%E0%A7%8D%E0%A6%B0%E0%A6%AA%E0%A6%A4%E0%A6%BF\" title=\"রাষ্ট্রপতি\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">রাষ্ট্রপতি</a>&nbsp;ও&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AD%E0%A6%BE%E0%A6%B0%E0%A6%A4%E0%A7%80%E0%A6%AF%E0%A6%BC_%E0%A6%89%E0%A6%AA%E0%A6%AE%E0%A6%B9%E0%A6%BE%E0%A6%A6%E0%A7%87%E0%A6%B6\" title=\"ভারতীয় উপমহাদেশ\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">দক্ষিণ এশিয়ার</a>&nbsp;একজন অন্যতম প্রভাবশালী রাজনৈতিক ব্যক্তিত্ব, যিনি বাঙালির অধিকার রক্ষায়&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AC%E0%A7%8D%E0%A6%B0%E0%A6%BF%E0%A6%9F%E0%A6%BF%E0%A6%B6_%E0%A6%AD%E0%A6%BE%E0%A6%B0%E0%A6%A4\" title=\"ব্রিটিশ ভারত\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">ব্রিটিশ ভারত</a>&nbsp;থেকে&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AD%E0%A6%BE%E0%A6%B0%E0%A6%A4_%E0%A6%AC%E0%A6%BF%E0%A6%AD%E0%A6%BE%E0%A6%9C%E0%A6%A8\" title=\"ভারত বিভাজন\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">ভারত বিভাজন</a>&nbsp;আন্দোলন এবং পরবর্তীতে&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AA%E0%A7%82%E0%A6%B0%E0%A7%8D%E0%A6%AC_%E0%A6%AA%E0%A6%BE%E0%A6%95%E0%A6%BF%E0%A6%B8%E0%A7%8D%E0%A6%A4%E0%A6%BE%E0%A6%A8\" title=\"পূর্ব পাকিস্তান\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">পূর্ব পাকিস্তান</a>&nbsp;থেকে&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AC%E0%A6%BE%E0%A6%82%E0%A6%B2%E0%A6%BE%E0%A6%A6%E0%A7%87%E0%A6%B6\" title=\"বাংলাদেশ\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">বাংলাদেশ</a>&nbsp;প্রতিষ্ঠার সংগ্রামে কেন্দ্রীয়ভাবে নেতৃত্ব প্রদান করেন। প্রাচীন&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AC%E0%A6%BE%E0%A6%99%E0%A6%BE%E0%A6%B2%E0%A6%BF_%E0%A6%9C%E0%A6%BE%E0%A6%A4%E0%A6%BF\" title=\"বাঙালি জাতি\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">বাঙালি সভ্যতার</a>&nbsp;আধুনিক স্থপতি হিসাবে শেখ মুজিবুর রহমানকে বাংলাদেশের \"<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%9C%E0%A6%BE%E0%A6%A4%E0%A6%BF%E0%A6%B0_%E0%A6%9C%E0%A6%A8%E0%A6%95\" title=\"জাতির জনক\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">জাতির জনক</a>\" বা \"<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%9C%E0%A6%BE%E0%A6%A4%E0%A6%BF%E0%A6%B0_%E0%A6%9C%E0%A6%A8%E0%A6%95\" title=\"জাতির জনক\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">জাতির পিতা</a>\" বলা হয়ে থাকে। তিনি&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AE%E0%A6%93%E0%A6%B2%E0%A6%BE%E0%A6%A8%E0%A6%BE_%E0%A6%86%E0%A6%AC%E0%A7%8D%E0%A6%A6%E0%A7%81%E0%A6%B2_%E0%A6%B9%E0%A6%BE%E0%A6%AE%E0%A6%BF%E0%A6%A6_%E0%A6%96%E0%A6%BE%E0%A6%A8_%E0%A6%AD%E0%A6%BE%E0%A6%B8%E0%A6%BE%E0%A6%A8%E0%A7%80\" class=\"mw-redirect\" title=\"মওলানা আব্দুল হামিদ খান ভাসানী\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">মওলানা আব্দুল হামিদ খান ভাসানী</a>&nbsp;প্রতিষ্ঠিত&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%86%E0%A6%93%E0%A6%AF%E0%A6%BC%E0%A6%BE%E0%A6%AE%E0%A7%80_%E0%A6%B2%E0%A7%80%E0%A6%97\" class=\"mw-redirect\" title=\"আওয়ামী লীগ\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">আওয়ামী লীগের</a>&nbsp;সভাপতি, বাংলাদেশের প্রথম রাষ্ট্রপতি এবং পরবর্তীতে এদেশের প্রধানমন্ত্রীর দায়িত্ব পালন করেন। জনসাধারণের কাছে তিনি শেখ মুজিব এবং শেখ সাহেব হিসাবে বেশি পরিচিত ছিলেন এবং তার উপাধি \"<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AC%E0%A6%99%E0%A7%8D%E0%A6%97%E0%A6%AC%E0%A6%A8%E0%A7%8D%E0%A6%A7%E0%A7%81\" class=\"mw-redirect\" title=\"বঙ্গবন্ধু\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">বঙ্গবন্ধু</a>\"। তার কন্যা&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%B6%E0%A7%87%E0%A6%96_%E0%A6%B9%E0%A6%BE%E0%A6%B8%E0%A6%BF%E0%A6%A8%E0%A6%BE\" title=\"শেখ হাসিনা\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">শেখ হাসিনা</a>&nbsp;বাংলাদেশ&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AC%E0%A6%BE%E0%A6%82%E0%A6%B2%E0%A6%BE%E0%A6%A6%E0%A7%87%E0%A6%B6_%E0%A6%86%E0%A6%93%E0%A6%AF%E0%A6%BC%E0%A6%BE%E0%A6%AE%E0%A7%80_%E0%A6%B2%E0%A7%80%E0%A6%97\" title=\"বাংলাদেশ আওয়ামী লীগ\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">আওয়ামী লীগের</a>&nbsp;বর্তমান সভানেত্রী এবং বাংলাদেশের বর্তমান&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A7%E0%A6%BE%E0%A6%A8%E0%A6%AE%E0%A6%A8%E0%A7%8D%E0%A6%A4%E0%A7%8D%E0%A6%B0%E0%A7%80\" title=\"প্রধানমন্ত্রী\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">প্রধানমন্ত্রী</a>।</p><p style=\"margin: 0.5em 0px; padding: 0px; font-family: sans-serif; line-height: 26px; font-size: 17px; text-align: justify; color: rgb(32, 33, 34);\">১৯৪৭-এ&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AD%E0%A6%BE%E0%A6%B0%E0%A6%A4_%E0%A6%AC%E0%A6%BF%E0%A6%AD%E0%A6%BE%E0%A6%9C%E0%A6%A8\" title=\"ভারত বিভাজন\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">ভারত বিভাগ</a>&nbsp;পরবর্তী পূর্ব পাকিস্তানের রাজনীতির প্রাথমিক পর্যায়ে শেখ মুজিব ছিলেন তরুণ ছাত্রনেতা। পরবর্তীতে তিনি&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AE%E0%A6%93%E0%A6%B2%E0%A6%BE%E0%A6%A8%E0%A6%BE_%E0%A6%86%E0%A6%AC%E0%A7%8D%E0%A6%A6%E0%A7%81%E0%A6%B2_%E0%A6%B9%E0%A6%BE%E0%A6%AE%E0%A6%BF%E0%A6%A6_%E0%A6%96%E0%A6%BE%E0%A6%A8_%E0%A6%AD%E0%A6%BE%E0%A6%B8%E0%A6%BE%E0%A6%A8%E0%A7%80\" class=\"mw-redirect\" title=\"মওলানা আব্দুল হামিদ খান ভাসানী\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">মওলানা আব্দুল হামিদ খান ভাসানী</a>&nbsp;প্রতিষ্ঠিত আওয়ামী লীগের সভাপতি হন ।&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%B8%E0%A6%AE%E0%A6%BE%E0%A6%9C%E0%A6%A4%E0%A6%A8%E0%A7%8D%E0%A6%A4%E0%A7%8D%E0%A6%B0\" title=\"সমাজতন্ত্র\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">সমাজতন্ত্রের</a>&nbsp;পক্ষসমর্থনকারী একজন অধিবক্তা হিসেবে তিনি তৎকালীন পূর্ব পাকিস্তানের জনগোষ্ঠীর প্রতি সকল ধরনের বৈষম্যের বিরুদ্ধে আন্দোলন গড়ে তোলেন। জনগণের স্বাধিকার প্রতিষ্ঠার লক্ষ্যে তিনি একসময়&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%9B%E0%A6%AF%E0%A6%BC_%E0%A6%A6%E0%A6%AB%E0%A6%BE\" class=\"mw-redirect\" title=\"ছয় দফা\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">ছয় দফা</a>&nbsp;স্বায়ত্তশাসন পরিকল্পনা প্রস্তাব করেন যাকে&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AA%E0%A6%B6%E0%A7%8D%E0%A6%9A%E0%A6%BF%E0%A6%AE_%E0%A6%AA%E0%A6%BE%E0%A6%95%E0%A6%BF%E0%A6%B8%E0%A7%8D%E0%A6%A4%E0%A6%BE%E0%A6%A8\" title=\"পশ্চিম পাকিস্তান\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">পশ্চিম পাকিস্তানে</a>&nbsp;একটি বিচ্ছিন্নতাবাদী পরিকল্পনা হিসেবে বিবেচনা করা হয়েছিল। ছয় দফা দাবির মধ্যে প্রধান ছিল বর্ধিত প্রাদেশিক স্বায়ত্তশাসন যার কারণে তিনি&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%86%E0%A6%87%E0%A6%AF%E0%A6%BC%E0%A7%81%E0%A6%AC_%E0%A6%96%E0%A6%BE%E0%A6%A8\" title=\"আইয়ুব খান\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">আইয়ুব খানের</a>&nbsp;সামরিক শাসনের অন্যতম বিরোধী পক্ষে পরিণত হন। ১৯৬৮ খ্রিষ্টাব্দে&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AD%E0%A6%BE%E0%A6%B0%E0%A6%A4\" title=\"ভারত\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">ভারত</a>&nbsp;সরকারের সাথে যোগসাজশ ও ষড়যন্ত্রের অভিযোগে তার বিচার শুরু হয় এবং পরবর্তীতে তিনি নির্দোষ প্রমাণিত হন।&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AA%E0%A6%BE%E0%A6%95%E0%A6%BF%E0%A6%B8%E0%A7%8D%E0%A6%A4%E0%A6%BE%E0%A6%A8%E0%A7%87%E0%A6%B0_%E0%A6%B8%E0%A6%BE%E0%A6%A7%E0%A6%BE%E0%A6%B0%E0%A6%A3_%E0%A6%A8%E0%A6%BF%E0%A6%B0%E0%A7%8D%E0%A6%AC%E0%A6%BE%E0%A6%9A%E0%A6%A8,_%E0%A7%A7%E0%A7%AF%E0%A7%AD%E0%A7%A6\" title=\"পাকিস্তানের সাধারণ নির্বাচন, ১৯৭০\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">১৯৭০ খ্রিষ্টাব্দের নির্বাচনে</a>&nbsp;তার নেতৃত্বাধীন আওয়ামী লীগ বিপুল বিজয় অর্জন করে। তথাপি তাকে সরকার গঠনের সুযোগ দেয়া হয় নি।</p><p style=\"margin: 0.5em 0px; padding: 0px; font-family: sans-serif; line-height: 26px; font-size: 17px; text-align: justify; color: rgb(32, 33, 34);\">পাকিস্তানের নতুন সরকার গঠন বিষয়ে তৎকালীন রাষ্ট্রপতি&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%87%E0%A6%AF%E0%A6%BC%E0%A6%BE%E0%A6%B9%E0%A6%BF%E0%A6%AF%E0%A6%BC%E0%A6%BE_%E0%A6%96%E0%A6%BE%E0%A6%A8\" title=\"ইয়াহিয়া খান\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">ইয়াহিয়া খান</a>&nbsp;এবং পশ্চিম পাকিস্তানের রাজনীতিবিদ&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%9C%E0%A7%81%E0%A6%B2%E0%A6%AB%E0%A6%BF%E0%A6%95%E0%A6%BE%E0%A6%B0_%E0%A6%86%E0%A6%B2%E0%A7%80_%E0%A6%AD%E0%A7%81%E0%A6%9F%E0%A7%8D%E0%A6%9F%E0%A7%8B\" title=\"জুলফিকার আলী ভুট্টো\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">জুলফিকার আলী ভুট্টোর</a>&nbsp;সাথে শেখ মুজিবের আলোচনা বিফলে যাওয়ার পর ১৯৭১ খ্রিষ্টাব্দে মার্চ ২৫ মধ্যরাত্রে পাকিস্তান সেনাবাহিনী ঢাকা শহরে&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%97%E0%A6%A3%E0%A6%B9%E0%A6%A4%E0%A7%8D%E0%A6%AF%E0%A6%BE\" title=\"গণহত্যা\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">গণহত্যা</a>&nbsp;পরিচালনা করে। একই রাতে তাকে গ্রেফতার করা হয় এবং পরবর্তীকালে পশ্চিম পাকিস্তানে নিয়ে যাওয়া হয়।<span id=\"cite_ref-1\" class=\"reference\" style=\"margin: 0px; padding: 0px; position: relative; font-size: 11.2px; line-height: 1; vertical-align: baseline; top: -0.5em; unicode-bidi: isolate; white-space: nowrap;\"><a href=\"https://bn.wikipedia.org/wiki/%E0%A6%B6%E0%A7%87%E0%A6%96_%E0%A6%AE%E0%A7%81%E0%A6%9C%E0%A6%BF%E0%A6%AC%E0%A7%81%E0%A6%B0_%E0%A6%B0%E0%A6%B9%E0%A6%AE%E0%A6%BE%E0%A6%A8#cite_note-1\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">[১]</a></span>&nbsp;রহিমুদ্দিন খান সামরিক আদালতে তাকে মৃত্যুদণ্ড প্রদান করে তবে তা কার্যকর করা হয় নি। ৯ মাসের রক্তক্ষয়ী&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AE%E0%A7%81%E0%A6%95%E0%A7%8D%E0%A6%A4%E0%A6%BF%E0%A6%AF%E0%A7%81%E0%A6%A6%E0%A7%8D%E0%A6%A7\" class=\"mw-redirect\" title=\"মুক্তিযুদ্ধ\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">মুক্তিযুদ্ধ</a>&nbsp;শেষে ১৯৭১-এর ১৬ই ডিসেম্বর বাংলাদেশ-ভারত যৌথ বাহিনীর কাছে পাকিস্তান সেনাবাহিনী আত্মসমর্পণ করার মধ্য দিয়ে বাংলাদেশ নামে স্বাধীন রাষ্ট্রের প্রতিষ্ঠা হয়। ১০ জানুয়ারি ১৯৭২ শেখ মুজিব পাকিস্তানের কারাগার থেকে মুক্ত হয়ে স্বদেশে প্রত্যাবর্তন করেন এবং বাংলাদেশের প্রথম রাষ্ট্রপতি হিসেবে দায়িত্ব পালন শুরু করেন। ১৯৭২-এর ১২ই জানুয়ারি তিনি সংসদীয় শাসনব্যবস্থা প্রবর্তন করে প্রধানমন্ত্রীর দায়িত্ব গ্রহণ করেন। মতাদর্শগতভাবে তিনি&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AC%E0%A6%BE%E0%A6%99%E0%A6%BE%E0%A6%B2%E0%A6%BF_%E0%A6%9C%E0%A6%BE%E0%A6%A4%E0%A7%80%E0%A6%AF%E0%A6%BC%E0%A6%A4%E0%A6%BE%E0%A6%AC%E0%A6%BE%E0%A6%A6\" title=\"বাঙালি জাতীয়তাবাদ\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">বাঙালি জাতীয়তাবাদ</a>,&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%B8%E0%A6%AE%E0%A6%BE%E0%A6%9C%E0%A6%A4%E0%A6%A8%E0%A7%8D%E0%A6%A4%E0%A7%8D%E0%A6%B0\" title=\"সমাজতন্ত্র\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">সমাজতন্ত্র</a>,&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%97%E0%A6%A3%E0%A6%A4%E0%A6%A8%E0%A7%8D%E0%A6%A4%E0%A7%8D%E0%A6%B0\" title=\"গণতন্ত্র\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">গণতন্ত্র</a>&nbsp;ও&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%A7%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%A8%E0%A6%BF%E0%A6%B0%E0%A6%AA%E0%A7%87%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%A4%E0%A6%BE%E0%A6%AC%E0%A6%BE%E0%A6%A6\" title=\"ধর্মনিরপেক্ষতাবাদ\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">ধর্মনিরপেক্ষতায়</a>&nbsp;বিশ্বাসী ছিলেন, যা সম্মিলিতভাবে&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AE%E0%A7%81%E0%A6%9C%E0%A6%BF%E0%A6%AC%E0%A6%AC%E0%A6%BE%E0%A6%A6\" title=\"মুজিববাদ\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">মুজিববাদ</a>&nbsp;নামে পরিচিত। জাতীয়তাবাদ, সমাজতন্ত্র, গণতন্ত্র ও ধর্মনিরপেক্ষতাকে ভিত্তি করে&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%B8%E0%A6%82%E0%A6%AC%E0%A6%BF%E0%A6%A7%E0%A6%BE%E0%A6%A8\" title=\"সংবিধান\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">সংবিধান</a>&nbsp;প্রণয়ন এবং সে অনুযায়ী রাষ্ট্র চালনার চেষ্টা সত্ত্বেও তীব্র দারিদ্র্য, বেকারত্ব, সর্বব্যাপী অরাজকতা এবং সেই সাথে ব্যাপক দুর্নীতি মোকাবেলায় তিনি কঠিন সময় অতিবাহিত করেন। ক্রমবর্ধমান রাজনৈতিক অস্থিরতা দমনের লক্ষ্যে ১৯৭৫ খ্রিষ্টাব্দে তিনি এক দলীয় রাজনীতি ঘোষণা করেন। এর সাত মাস পরে ১৯৭৫ সালের ১৫ আগস্ট তারিখে একদল সামরিক কর্মকর্তার হাতে তিনি&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%B6%E0%A7%87%E0%A6%96_%E0%A6%AE%E0%A7%81%E0%A6%9C%E0%A6%BF%E0%A6%AC%E0%A7%81%E0%A6%B0_%E0%A6%B0%E0%A6%B9%E0%A6%AE%E0%A6%BE%E0%A6%A8%E0%A7%87%E0%A6%B0_%E0%A6%B9%E0%A6%A4%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%95%E0%A6%BE%E0%A6%A3%E0%A7%8D%E0%A6%A1\" title=\"শেখ মুজিবুর রহমানের হত্যাকাণ্ড\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">সপরিবারে নিহত</a>&nbsp;হন। ২০০৪ সালে&nbsp;<a href=\"https://bn.wikipedia.org/wiki/%E0%A6%AC%E0%A6%BF%E0%A6%AC%E0%A6%BF%E0%A6%B8%E0%A6%BF\" class=\"mw-redirect\" title=\"বিবিসি\" style=\"margin: 0px; padding: 0px; color: rgb(11, 0, 128); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; display: inline-block;\">বিবিসি\'র</a>&nbsp;সম্পাদিত একটি জরিপে</p></div></div></div>','from wiki',NULL,'2020-09-12 12:25:03'),(10,'১৫ আগস্ট : শোকাহত হৃদয়ের ভাব......','10.jpg','১৫ আগস্ট আমাদের কাছে এক শোকাবহ স্মৃতি। বেদনার্ত অশ্রুভারাক্রান্ত হৃদয় নিয়ে আমাদের সব সময় কাটে। মা-বাবা, ভাই ও প্রিয়জন হারানোর এই দুঃখ-কষ্ট, অভাববোধ আমাদের সব সময় তাড়া করে। আমাদের আবেগাচ্ছাদিত করে রাখে।','<p dir=\"ltr\" style=\"margin: 8pt -11pt 0pt; padding: 0pt 0pt 12pt; font-family: arial; line-height: 2; font-size: 17px; text-align: justify; color: rgb(33, 37, 41);\"><span style=\"margin: 0px; padding: 0px; display: inline-block; font-size: 12pt; font-family: Arial; color: rgb(51, 51, 51); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">১৫ আগস্ট আমাদের কাছে এক শোকাবহ স্মৃতি। বেদনার্ত অশ্রুভারাক্রান্ত হৃদয় নিয়ে আমাদের সব সময় কাটে। মা-বাবা, ভাই ও প্রিয়জন হারানোর এই দুঃখ-কষ্ট, অভাববোধ আমাদের সব সময় তাড়া করে। আমাদের আবেগাচ্ছাদিত করে রাখে।</span></p><p dir=\"ltr\" style=\"margin: 0pt -11pt; padding: 0px; font-family: arial; line-height: 2; font-size: 17px; text-align: justify; color: rgb(33, 37, 41);\"><span style=\"margin: 0px; padding: 0px; display: inline-block; font-size: 12pt; font-family: Arial; color: rgb(51, 51, 51); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">১৯৭৫ থেকে লালন করে চলেছি আপনজনদের স্মৃতি। এক এক করে দিন কেটে যাচ্ছে, সময়ের পরিবর্তনে আমাদেরও অনেক পথ পাড়ি দিতে হয়েছে। অনেক কথা শুনতে হয়েছে, অনেক কিছু উপলব্ধি করেছি এবং অনেক কিছু ভাবতেও শিখেছি।</span></p><p dir=\"ltr\" style=\"margin: 0pt -11pt; padding: 0px; font-family: arial; line-height: 2; font-size: 17px; text-align: justify; color: rgb(33, 37, 41);\"><span style=\"margin: 0px; padding: 0px; display: inline-block; font-size: 12pt; font-family: Arial; color: rgb(51, 51, 51); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">রাজনীতির ভেতর জন্ম, আমাদের পিতা শেখ মুজিবুর রহমান কীভাবে একটা জাতির পিতা হয়ে উঠলেন, তা তো আমি ঘনিষ্ঠভাবে শিশু বয়স থেকে দেখেছি। যখন তিনি কারাগারে রাজবন্দী, সাক্ষাতের দিনে মায়ের সঙ্গে আমরা যেতাম। কত কথা তাকে শোনাতাম। খবরের কাগজের অনেক সংবাদ পর্যন্ত। রাসেল তাকে বাড়ি আনার জন্য আবদার করত।</span></p><p dir=\"ltr\" style=\"margin: 0pt -11pt; padding: 0px; font-family: arial; line-height: 2; font-size: 17px; text-align: justify; color: rgb(33, 37, 41);\"><span style=\"margin: 0px; padding: 0px; display: inline-block; font-size: 12pt; font-family: Arial; color: rgb(51, 51, 51); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">আব্বা আমাদের আদর করে লেখাপড়া করার কথা বলতেন কারাগার তার কীভাবে কাটে, এটা শোনার আমার আগ্রহ ছিল। তাই কত প্রশ্ন করতাম। তিনি হাসিমুখে সব উত্তর দিতেন। আব্বাকে আমি আশ্চর্য এক বিমুগ্ধ অনুভূতি দিয়ে দেখতাম। তার স্নেহ আদর আমার জীবনে এক মূল্যবান আশীর্বাদ।&nbsp;</span></p><p dir=\"ltr\" style=\"margin: 0pt -11pt; padding: 0px; font-family: arial; line-height: 2; font-size: 17px; text-align: justify; color: rgb(33, 37, 41);\"><span style=\"margin: 0px; padding: 0px; display: inline-block; font-size: 12pt; font-family: Arial; color: rgb(51, 51, 51); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">বাড়িতে তাকে খুব কাছে পেতাম, তাই যেটুকু পেতাম প্রাণভরে দেখতাম, তার কথা শুনতাম, তার আদর স্নেহ স্পর্শের জন্য কাতর হয়ে থাকতাম। তার সেই বিশাল কক্ষে আমাদের ভাইবোনদের একটা গভীর আশ্রয় ছিল। এটাই ছিল যেন আমাদের পরম পাওয়া।</span></p><p dir=\"ltr\" style=\"margin: 0pt -11pt; padding: 0px; font-family: arial; line-height: 2; font-size: 17px; text-align: justify; color: rgb(33, 37, 41);\"><span style=\"margin: 0px; padding: 0px; display: inline-block; font-size: 12pt; font-family: Arial; color: rgb(51, 51, 51); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">বাবার অবর্তমানে আমাদের আশ্রয়ে ছিলেন মা। মায়ের কাছ থেকে আমরা আব্বাকে&nbsp; চিনতে ও জানতে শিখি। আব্বার রাজনৈতিক কর্মকাণ্ডের প্রতি মায়ের অসম্ভব রকম সহযোগিতা ছিল সেটা তো তার জীবনের আর এক অধ্যায়। আমার মায়ের ধৈর্য, নীতিবোধ, পারিবারিক সংস্কার, ভালোবাসা ও মমত্ববোধ এক ভিন্ন মাত্রা। যার কোন তুলনা খুঁজে পাওয়া ভার।</span></p><p dir=\"ltr\" style=\"margin: 0pt -11pt; padding: 0px; font-family: arial; line-height: 2; font-size: 17px; text-align: justify; color: rgb(33, 37, 41);\"><span style=\"margin: 0px; padding: 0px; display: inline-block; font-size: 12pt; font-family: Arial; color: rgb(51, 51, 51); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;\">মহৎ ব্যক্তিত্বদের পেছনে এমনিভাবে মহীয়সীদের অবদান রয়ে যায়। আব্বার প্রতি মায়ের সযত্ন সহযোগিতা আমাদের দৃষ্টি এড়াত না। আমরা এভাবেই মায়ের কাছ থেকে শিক্ষা নিয়েছি আব্বার রাজনৈতিক কর্মকাণ্ড ও আদর্শবোধে উজ্জীবিত হয়েছি, ধীরে ধীরে নিজেদেরও তার সঙ্গে সম্পৃক্ত করেছি। দেশ ও দেশের মানুষ, সমাজ ও সমাজের ভালো-মন্দ সম্পর্কে জ্ঞান লাভ করেছি এবং পিতার আদর্শের অনুসারী হিসেবে নিজেকে উৎসর্গ করতে পেরে গর্ববোধ করেছি।</span></p>','শেখ রেহানা...',NULL,'2020-09-22 15:21:03'),(11,'৭ মার্চের ভাষণ  -  বাঙালি জাতির মুক্তির সনদ','11.jpg','৭ মার্চের ভাষণ','<p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">বঙ্গবন্ধু আজীবন স্বতঃস্ফূর্তভাবে বক্তৃতা দিতেন। কারো লিখিত বক্তৃতা তিনি পড়তে পারতেন না, পড়েনওনি। বঙ্গবন্ধুর ভাষণ লিখিত হতো না। সমাজবিজ্ঞানী সরদার ফজলুল করিমের ভাষায় ‘শেখ মুজিবের ভাষণ যেমন লিখিত হতো না, তেমনি তাঁর প্রদত্ত ভাষণকে লেখা যেত না।’ ৭ মার্চের ভাষণ নিয়ে ইতোমধ্যেই অসংখ্য লেখা বেরিয়েছে। একাধিক বই রচনা করা হয়েছে। বঙ্গবন্ধুর ভাষণ পৃথিবীর সেরা ভাষণের একটি হিসেবে স্থান করে নিয়েছে। জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমানের ঐতিহাসিক ৭ মার্চের ভাষণকে ‘মেমোরি অব দ্য ওয়ার্ল্ড’-এর স্বীকৃতি দিয়েছে ইউনেসকো -- ফ্রান্সের রাজধানী প্যারিসে ইউনেসকোর মহাপরিচালক ইরিনা বোকোভা এক ঘোষণায় এ কথা জানান।</span></p><p><span id=\"docs-internal-guid-a791feaf-7fff-4e4d-65d5-033c0cbfd48e\" style=\"font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><span style=\"background-color: transparent; font-family: Arial; font-size: 11pt; white-space: pre-wrap;\"><br></span></span></p><p><span id=\"docs-internal-guid-a791feaf-7fff-4e4d-65d5-033c0cbfd48e\" style=\"font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><span style=\"background-color: transparent; font-family: Arial; font-size: 11pt; white-space: pre-wrap;\">Jakob F. Field সম্পাদিত “We Shall Fight on the Beaches : The Speeches that Inspired History” শীর্ষক গ্রন্থে বঙ্গবন্ধুর ৭ মার্চের ভাষণটি খ্রি.পূর্ব ৪৩১ অব্দ থেকে ১৯৮৭ সাল পর্যন্ত ইতিহাস সৃষ্টিকারী ভাষণের মধ্যে স্থান পেয়েছে। দ্বিতীয় বিশ্বযুদ্ধ চলাকালে ব্রিটিশ প্রধানমন্ত্রী স্যার উইনস্টন চার্চিলের ভাষণ থেকে এই বইয়ের শিরোনাম করা হয়েছে। এই বইয়ে শেষ ভাষণটি মার্কিন প্রেসিডেন্ট রোনাল্ড রিগ্যানের ‘টিয়ার্স ডাউন ওয়াল’। ২২৩ পৃষ্ঠার বইটির ২০১ পৃষ্ঠায় বঙ্গবন্ধুর ভাষণটি ‘দি স্ট্রাগল দিস টাইম ইজ দ্য স্ট্রাগল ফর ইনডিপেনডেন্স’ শিরোনামে মহাকালের ইতিহাসে স্থান করে নিয়েছে। সমস্যা হচ্ছে ৭ মার্চের ভাষণের ওপর সব লেখা, বই এমনকি ভাষণটি বারবার পড়লেও ভাষণের তাৎপর্য অনুধাবন করা যায় কিন্তু সত্যিকারের বঙ্গবন্ধুকে পাওয়া যায় না। ধরা যাক, বঙ্গবন্ধুর ভাষণটি আগেই লিখিত ছিল। বঙ্গবন্ধুকন্যা শেখ হাসিনার ভাষায়, ‘সেদিন আব্বার একটু সর্দি ছিল। আমি গলায় কপালে ভিক্স মালিশ করে দিলাম। কাঁথাটা গায়ে দিয়ে শুয়ে থাকলেন।’ কল্পনা করা যাক, বঙ্গবন্ধুর সর্দি আরো বেড়ে গেল, জ্বর আসল, গলার স্বর একেবারে বন্ধ হওয়ার উপক্রম। বঙ্গবন্ধু কোনো অবস্থাতেই উত্তাল রেসকোর্সে হাজির হতে পারলেন না। তিনি লিখিত ভাষণটি পাঠিয়ে দিলেন এবং কাউকে দিয়ে পাঠ করাতে বললেন। কেমন হতো যদি বঙ্গবন্ধুর পক্ষে কেউ তাঁর বক্তৃতাটি পড়ত? বঙ্গবন্ধু ছাড়া ৭ মার্চের ভাষণ চিন্তাই করা যায় না। বঙ্গবন্ধুর মতো করে কে বলতে পারত ‘ভাইয়েরা আমার’। পৃথিবীর ইতিহাসের সেরা ভাষণ হওয়ার অন্যতম কারণ হচ্ছে ইতিহাসের নির্দিষ্ট সেই মুহূর্তে বঙ্গবন্ধুর উপস্থিতি এবং স্বকণ্ঠে এই ভাষণ উচ্চারণের অপরিহার্যতা। ১৯ নভেম্বর ১৮৬৩ সালে গেটিসবার্গে লিংকন না গেলেও অনুষ্ঠানটি হতো। কারণ লিংকন সেদিন অসুস্থ ছিলেন এবং মূল বক্তাও ছিলেন না। আমেরিকার গৃহযুদ্ধে নিহত ইউনিয়নপন্থি সৈনিকদের স্মরণে নির্মিত স্মৃতিসৌধের ফলক উন্মোচন অনুষ্ঠানে মূল বক্তা ছিলেন সিনেটর এডওয়ার্ড এভারেট। এভারেটের দুই ঘণ্টাব্যাপী বক্তৃতার পর মাত্র দুই মিনিটে বিখ্যাত গেটিসবার্গ ভাষণ দেন লিংকন। ‘আই হ্যাভ এ ড্রিম’ বক্তৃতা যখন ২৮ আগস্ট ১৯৬৩ সালে মার্টিন লুথার কিং দেন সে অনুষ্ঠানেও লুথার কিং ছিলেন অনুষ্ঠানের অনেক বক্তার একজন। কৃষ্ণাঙ্গ আমেরিকানদের সমঅধিকার নিয়ে আন্দোলনকারী আরো ২০টি সংগঠনের নেতার সঙ্গে কিং তাঁর বক্তৃতা করেন। বক্তৃতাটি ছিল লিখিত। তবে বক্তৃতার শেষের দিকে বিশিষ্ট সঙ্গীত শিল্পী মাহালিয়া জ্যাকসনের অনুরোধে বক্তৃতা বাড়িয়ে আমেরিকাকে নিয়ে তাঁর স্বপ্নের কথা বলেন। উইনস্টন চার্চিলের ৪ জুন ১৯৪০-এর ‘উই শ্যাল ফাইট অন দি বিচেস’ বক্তৃতাটিও অন্য কেউ দিলে চলত। ১০ মে ১৯৪০ কোয়ালিশন সরকারের প্রধানমন্ত্রী হিসেবে দায়িত্ব নেয়ার পর ব্রিটিশ কমনসভায় একই বিষয়ে ১৯৪০ সালের ১৩ মে থেকে ১৮ জুন পর্যন্ত চারটি ভাষণ দেন চার্চিল। কিন্তু ৭ মার্চ ১৯৭১ বঙ্গবন্ধুর ভাষণ ছিল ইতিহাসের অনিবার্যতা। বঙ্গবন্ধু হলেন প্রখ্যাত মনীষী এস ওয়াজেদ আলীর ১৯৪৩ সালে প্রকাশিত ‘ভবিষ্যতের বাঙালি’ গ্রন্থের সেই মহামানব যার প্রতীক্ষায় ছিল বাঙালি, যিনি তাদের গৌরবময় জীবনের সন্ধান দেবেন। ১ মার্চ ঘোষণা করা হয় ৭ মার্চ বঙ্গবন্ধু রেসকোর্স ময়দানে জনসভায় পরবর্তী কর্মসূচি ঘোষণা করবেন। ৭ মার্চ আসার আগেই ২ মার্চ ঢাকা বিশ্ববিদ্যালয়ে বাংলাদেশের পতাকা উত্তোলন করা হয়।</span></span><br></p><p><span style=\"background-color: transparent; font-family: Arial; font-size: 11pt; white-space: pre-wrap;\">৩ মার্চ স্বাধীনতার ইশতেহার পাঠ করা হয়। সরদার ফজলুল করিমের ভাষায় ‘কোনো ব্যক্তি শূন্য থেকে এসে বলতে পারে না, আমি তোমাদের নেতা এবং তার বলা মাত্র অপর সকলে যথার্থভাবে অন্তর দিয়ে বলতে পারে না, হ্যাঁ আপনি আমাদের নেতা, একজন জবর নেতৃত্ব দখল কেবল অস্ত্রধারীর পক্ষেই সম্ভব। নিরস্ত্র সংগ্রামীর পক্ষে নয়।’ বঙ্গবন্ধু যিনি ইতিহাসের শ্রষ্টা এবং সৃষ্টি তিনিই একটি চরণে বাঙালির ইতিহাস রচনা করতে পারেন ‘বাংলার ইতিহাস এ দেশের মানুষের রক্ত দিয়ে রাজপথ রঞ্জিত করার ইতিহাস।’ একমাত্র বঙ্গবন্ধুর পক্ষেই বাঙালির ভবিষ্যৎ এক লাইনে রচনা সম্ভব ‘৭ কোটি মানুষকে দাবায়ে রাখতে পারবা না।’ সেদিন রেসকোর্সের মাঠে দোভাষীর কাজ করছিলেন তখনকার ইংরেজি বিভাগের ছাত্র সৈয়দ মনজুরুল ইসলাম। বঙ্গবন্ধুর ভাষণে তাৎক্ষণিক ইংরেজি করে শোনাচ্ছিল এক বিদেশি সাংবাদিককে। প্রথম কিছু বাক্যের ইংরেজি অনুবাদ শোনানোর পর বিদেশি সাংবাদিক তাকে অনুবাদ করতে বারণ করলেন। যদিও ওই সাংবাদিক এক অক্ষর বাংলাও জানতেন না। বঙ্গবন্ধুর ভাষণটি সেই সাংবাদিক মনোযোগ দিয়ে শুনছিলেন। সৈয়দ মনজুরুলের ভাষায়, ‘তার মুখ দেখে মনে হচ্ছিল তিনি প্রতিটি বাক্য বুঝছেন, যেন বঙ্গবন্ধু বাংলাতে নয়, ইংরেজিতে ভাষণটি দিচ্ছেন।’ বিদেশি সাংবাদিক তার হোটেলে যাওয়ার আগে সৈয়দ মনজুর জিজ্ঞেস করেছিলেন এই ভাষণের পর কী হতে পারে। বিদেশি সাংবাদিক বলেছিলেন, ‘গেট রেডি’।</span><b style=\"font-weight:normal;\"><br></b></p><p></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">বঙ্গবন্ধু ৭ মার্চের ভাষণে স্বাধীনতার সংগ্রাম কথাটা বলেই ক্ষান্ত হননি, মুক্তির সংগ্রামের কথাটাও যোগ করেছিলেন। যুদ্ধের মুখোমুখি দাঁড়িয়েও বঙ্গবন্ধুর মনে মুক্তির সংগ্রামের তাৎপর্য লুকানো ছিল। বঙ্গবন্ধুর ভাষণে ‘স্বাধীনতা’ শব্দটি একবার উচ্চারিত হলেও ‘মুক্তি’ শব্দটি ব্যবহার করেছেন কয়েকবার ‘আজ বাংলার মানুষ মুক্তি চায়’, ‘এ দেশের মানুষ অর্থনৈতিক, রাজনৈতিক ও সাংস্কৃতিক মুক্তি পাবে’, ‘যে পর্যন্ত আমার এই দেশের মুক্তি না হয়’, ‘এ দেশের মানুষকে মুক্ত করে ছাড়ব ইনশাল্লাহ’, সবশেষে ‘এবারের সংগ্রাম আমাদের মুক্তির সংগ্রাম, এবারের সংগ্রাম স্বাধীনতার সংগ্রাম।’ স্বাধীনতার সংগ্রামের চেয়ে মুক্তির সংগ্রাম অনেক বেশি তাৎপর্যপূর্ণ। যদিও স্বাধীনতা ছাড়া মুক্তির সংগ্রাম শুরুই করা যায় না। বিদেশি শাসনের অবসান হলেও মানুষ মুক্ত হয় না, যদি না মানুষ অর্থনৈতিক ও সামাজিক মুক্তি অর্জন না করে। ১৯৭১-এ আমাদের স্বাধীনতার সংগ্রাম শেষ হয়। হাজার বছরের ইতিহাসে বাঙালি প্রথম একটি স্বাধীন ও সার্বভৌম রাষ্ট্রের মালিক হয়। অর্থনৈতিক ও সামাজিক মুক্তির পক্ষে দেশ যাত্রা শুরু করেছিল মাত্র। দেশের সেই অগ্রযাত্রা থামিয়ে দেয়া হয় ১৯৭৫-এর ১৫ আগস্ট জাতির পিতাকে হত্যার মধ্য দিয়ে। ইতিহাসের পাতা ঘুরতে থাকে পেছনের দিকে। সামাজিকভাবে পিছিয়ে পড়ার চাকা এখনো থামানো যায়নি। গত শতাব্দীর চল্লিশের দশকেও আমরা আরো উদার ছিলাম। এত ধর্মান্ধ কুসংস্কারাচ্ছন্ন ছিল না সমাজ, অন্তত বুদ্ধিবৃত্তিক সমাজের একটা উল্লেখযোগ্য অংশ ছিল সংস্কারমুক্ত। অর্থনৈতিকভাবে আমরা দ্রুত এগুচ্ছি। ২০২১ সালে মাথাপিছু ডলারের হিসাবে আমরা বিশ্বব্যাংকের মধ্যম আয়ের দেশের তালিকায় স্থান পাব। ২০৪১ সালে হয়তো উন্নত দেশও হব। </span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\"><br></span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">কিন্তু বঙ্গবন্ধু যে মুক্তির স্বপ্ন দেখেছিলেন সেটা তাঁর স্বপ্নের মতো হবে কী? </span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\"><br></span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">বঙ্গবন্ধু বলেছিলেন, ‘এই বাংলায় হিন্দু-মুসলমান, বাঙালি, নন-বাঙালি যারা আছে তারা আমাদের ভাই। তাদের রক্ষার দায়িত্ব আপনাদের উপরে, আমাদের উপরে, আমাদের যেন বদনাম না হয়।’ আমরা সবাই মিলেমিশে একটি বহুমাত্রিক, বহুবাচনিক সমাজ বিনির্মাণ করতে পারব কিনা সেটা এখন থেকেই ভাবতে হবে। স্বাধীনতার চেয়ে অনেক তাৎপর্যপূর্ণ শব্দ মুক্তি। মুক্তি বলতে সব বঞ্চনা, বৈষম্য, শোষণ, সংকীর্ণতা, কূপমণ্ডূকতা</span><span style=\"background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\"><font face=\"Arial\"><span style=\"font-size: 11pt; white-space: pre-wrap;\">, চেতনার দীনতা থেকে মুক্তি বুঝিয়েছিলেন বঙ্গবন্ধু। </span></font></span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\"><font face=\"Arial\"><span style=\"font-size: 11pt; white-space: pre-wrap;\"><br></span></font></span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;\"><font face=\"Arial\"><span style=\"font-size: 11pt; white-space: pre-wrap;\">বঙ্গবন্ধুকন্যা শেখ হাসিনা আমাদের মুক্তির সংগ্রামের নেতৃত্ব দিচ্ছেন তবে মুক্তির সংগ্রাম কখনো শেষ হয় না। এটা চলে নিরন্তর। মানুষ অনবরত অধিকতর মুক্তির দিকে এগিয়ে চলে।</span></font></span></p>','অধ্যাপক ড. মীজানুর রহমান ; উপাচার্য, জগন্নাথ বিশ্ববিদ্যালয়।',NULL,'2020-08-15 17:20:43');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `activation` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'1.jpg',1,NULL,'2020-03-08 13:21:45');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `first_pages`
--

DROP TABLE IF EXISTS `first_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `first_pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `first_pages`
--

LOCK TABLES `first_pages` WRITE;
/*!40000 ALTER TABLE `first_pages` DISABLE KEYS */;
INSERT INTO `first_pages` VALUES (4,'অনন্য এক জননেতা','শেখ মুজিব বা মুজিব, ছিলেন বাংলাদেশের প্রথম রাষ্ট্রপতি ও ভারতীয় উপমহাদেশের একজন অন্যতম প্রভাবশালী রাজনৈতিক ব্যক্তিত্ব, যিনি বাঙালির অধিকার রক্ষায় ব্রিটিশ ভারত থেকে ভারত বিভাজন আন্দোলন এবং পরবর্তীতে পূর্ব পাকিস্তান থেকে বাংলাদেশ প্রতিষ্ঠার সংগ্রামে কেন্দ্রীয়ভাবে নেতৃত্ব প্রদান করেন। প্রাচীন বাঙালি সভ্যতার আধুনিক স্থপতি হিসাবে শেখ মুজিবুর রহমান কে বাংলাদেশের \"জাতির জনক\" বা \"জাতির পিতা\" বলা হয়।',NULL,NULL);
/*!40000 ALTER TABLE `first_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `histories`
--

DROP TABLE IF EXISTS `histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `histories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'notext',
  `dis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `histories`
--

LOCK TABLES `histories` WRITE;
/*!40000 ALTER TABLE `histories` DISABLE KEYS */;
INSERT INTO `histories` VALUES (1,'ইতিহাস','ইতিহাসের সর্বশ্রেষ্ঠ বাঙালি সম্পর্কে জানুন এখানে। আমরা সযত্নে সংগ্রহ করেছি সকল নথি, চিত্র এবং তথ্য জাতির জনককে আরো ভালো করে জানার জন্য।','1.jpg',NULL,'2020-03-08 13:26:37');
/*!40000 ALTER TABLE `histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `know_mores`
--

DROP TABLE IF EXISTS `know_mores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `know_mores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no text',
  `dis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `know_mores`
--

LOCK TABLES `know_mores` WRITE;
/*!40000 ALTER TABLE `know_mores` DISABLE KEYS */;
INSERT INTO `know_mores` VALUES (1,'asdfasdf','asdfasdf','1.png',NULL,'2020-06-05 04:01:47');
/*!40000 ALTER TABLE `know_mores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logos`
--

DROP TABLE IF EXISTS `logos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `activation` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logos`
--

LOCK TABLES `logos` WRITE;
/*!40000 ALTER TABLE `logos` DISABLE KEYS */;
INSERT INTO `logos` VALUES (1,'1.png',1,NULL,'2020-08-12 12:59:03');
/*!40000 ALTER TABLE `logos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (14,'2014_10_12_000000_create_users_table',1),(15,'2014_10_12_100000_create_password_resets_table',1),(16,'2019_08_19_000000_create_failed_jobs_table',1),(17,'2020_02_19_074341_create_articles_table',1),(18,'2020_03_02_175016_create_logos_table',1),(19,'2020_03_02_182849_create_first_pages_table',1),(20,'2020_03_02_190331_create_banners_table',1),(21,'2020_03_03_090632_create_histories_table',1),(22,'2020_03_03_101223_create_mujib_histories_table',1),(23,'2020_03_03_101247_create_mujib_lives_table',1),(24,'2020_03_03_101347_create_mujib_speeches_table',1),(25,'2020_03_03_101407_create_mujib_publications_table',1),(26,'2020_03_07_145517_create_know_mores_table',1),(27,'2020_03_23_111625_create_password_securities_table',2),(28,'2020_06_05_101209_create_supers_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mujib_histories`
--

DROP TABLE IF EXISTS `mujib_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mujib_histories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no text',
  `dis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mujib_histories`
--

LOCK TABLES `mujib_histories` WRITE;
/*!40000 ALTER TABLE `mujib_histories` DISABLE KEYS */;
INSERT INTO `mujib_histories` VALUES (1,'১৯২০','শেখ মুজিবুর রহমান ১৯২০ সালের ১৭ই মার্চ তৎকালীন ভারতীয় উপমহাদেশের বঙ্গ প্রদেশের অন্তর্ভুক্ত ফরিদপুর জেলার গোপালগঞ্জ মহকুমার পাটগাতি ইউনিয়নের টুঙ্গিপাড়া গ্রামে জন্মগ্রহণ করেন। তার বাবা শেখ লুৎফর রহমান গোপালগঞ্জ দায়রা আদালতের সেরেস্তাদার (যিনি আদালতের হিসাব সংরক্ষণ করেন) ছিলেন এবং মা\'র নাম সায়েরা খাতুন। চার কন্যা এবং দুই পুত্রের সংসারে তিনি ছিলেন তৃতীয় সন্তান। তার বড় বোনের নাম ফাতেমা বেগম, মেজ বোন আছিয়া বেগম, সেজ বোন হেলেন ও ছোট বোন লাইলী; তার ছোট ভাইয়ের নাম শেখ আবু নাসের।','1.png',NULL,'2020-03-08 13:28:51');
/*!40000 ALTER TABLE `mujib_histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mujib_lives`
--

DROP TABLE IF EXISTS `mujib_lives`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mujib_lives` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no text',
  `dis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mujib_lives`
--

LOCK TABLES `mujib_lives` WRITE;
/*!40000 ALTER TABLE `mujib_lives` DISABLE KEYS */;
INSERT INTO `mujib_lives` VALUES (3,'৭ই মার্চ, ১৯৭১','“এবারের সংগ্রাম স্বাধীনতার সংগ্রাম” বাংলাদেশের স্বাধীনতা সংগ্রামের সূচনা বাক্য উচ্চারণ করলেন নেতা','3.png',NULL,'2020-06-04 04:40:34'),(5,'৭ই মার্চ, ১৯৭১','its a Description and very big description','5.jpg',NULL,'2020-09-12 12:38:03');
/*!40000 ALTER TABLE `mujib_lives` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mujib_publications`
--

DROP TABLE IF EXISTS `mujib_publications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mujib_publications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no text',
  `dis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mujib_publications`
--

LOCK TABLES `mujib_publications` WRITE;
/*!40000 ALTER TABLE `mujib_publications` DISABLE KEYS */;
INSERT INTO `mujib_publications` VALUES (1,'asdfasdf','afasd saf sdf','1.png',NULL,'2020-06-05 04:02:00');
/*!40000 ALTER TABLE `mujib_publications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mujib_speeches`
--

DROP TABLE IF EXISTS `mujib_speeches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mujib_speeches` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no text',
  `dis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mujib_speeches`
--

LOCK TABLES `mujib_speeches` WRITE;
/*!40000 ALTER TABLE `mujib_speeches` DISABLE KEYS */;
INSERT INTO `mujib_speeches` VALUES (1,'Bangabandhu in Language movement','asdf sad fsdf sdf','1.png',NULL,'2020-09-12 13:11:40'),(5,'Bangabandhu in Language movement','aaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaa a a a  a a aa','5.jpg',NULL,'2020-08-12 12:57:21');
/*!40000 ALTER TABLE `mujib_speeches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('aunshonhsasan@gmail.com','$2y$10$2Ia6SSEpX0YYvI/KsSOQ0ee7rcT7n0gHOtQme4tE94enNsFMwC5fW','2020-03-22 15:42:08');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_securities`
--

DROP TABLE IF EXISTS `password_securities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_securities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `google2fa_enable` tinyint(1) NOT NULL DEFAULT '0',
  `google2fa_secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_securities`
--

LOCK TABLES `password_securities` WRITE;
/*!40000 ALTER TABLE `password_securities` DISABLE KEYS */;
INSERT INTO `password_securities` VALUES (1,2,0,'4LAWAMMQRDID7SPL','2020-08-11 16:55:19','2020-09-22 15:08:55'),(2,1,1,'2LRQOE5NJ2WPJPOZ','2020-08-13 16:42:07','2020-09-28 08:52:20'),(3,6,1,'GDATSQL2SLP6TNFY','2020-08-16 12:46:04','2020-09-22 15:14:41'),(4,7,0,'Q7HOWXWUZQ2SD5LX','2020-08-18 16:42:06','2020-09-20 15:32:16');
/*!40000 ALTER TABLE `password_securities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supers`
--

DROP TABLE IF EXISTS `supers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `shutDown` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supers`
--

LOCK TABLES `supers` WRITE;
/*!40000 ALTER TABLE `supers` DISABLE KEYS */;
INSERT INTO `supers` VALUES (1,1,'2020-06-04 18:00:00','2020-08-12 13:05:37');
/*!40000 ALTER TABLE `supers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` int(191) NOT NULL DEFAULT '1',
  `userActivation` int(191) NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Tanvir',100,1,'yaiamtanvir@gmail.com',NULL,'$2y$10$AhCO.1bbLSFnWcnD8sMf..o9y54/g8RSJDfkn4jcWrsztK9Wv478a','oi43w9xqNRq629AeTkZXGrJyqxWQLBiipTA63OBRFwOyVmpj0XGqUBspNKpj','2020-03-08 13:13:14','2020-06-06 11:50:31'),(2,'Super',999,1,'xubi.aunshon@gmail.com',NULL,'$2y$10$jxTHbehBwHo2YpxA6QKm7u.ab3vWojPwxfVBoTzgU/tK1SR.fhxZW','nufJjf6jeIsaYuMNJd5a2QkHYIJRKrbVKFtk5lbjp01MZcXfoEIo9Vd4f0BR','2020-03-22 13:04:11','2020-03-22 15:44:55'),(6,'admin.0120',1,1,'admin.0120@bongobondhu.com',NULL,'$2y$10$olFfD0igmhvLTdn6CmMXAuxobzOdyrDzfutlzhofGcYa3Sly6VhPG',NULL,'2020-06-05 02:29:30','2020-06-05 11:16:14'),(7,'admin.0220',1,1,'admin.0220@bongobondhu.com',NULL,'$2y$10$0gvleDP7dFug7uaM01SzfOfueEACOG2NObN/6k761Sjefsjyq94NG',NULL,'2020-06-05 03:11:37','2020-06-05 11:16:10'),(8,'admin.0320',1,1,'admin.0320@bongobondhu.com',NULL,'$2y$10$FbbBGEfnG5H7So38.k8Routu3HhGnI8vgqtK.fl9J7W5vJGHTP11i',NULL,'2020-06-05 03:14:20','2020-08-12 13:03:27'),(10,'admin.0420',1,1,'admin.0420@bongobondhu.com',NULL,'$2y$10$PKNOX3RB8IRp50pbHHX1hu0DRTocxyJj7J6qqkyJiBYknOeAuvPR.',NULL,'2020-06-05 03:18:36','2020-06-05 03:18:42'),(11,'admin.0520',1,1,'admin.0520@bongobondhu.com',NULL,'$2y$10$Uyup7LNqBVBPyBocT71WKecnR/5hPCJ34E7IJKIrNmD/hovE590wm',NULL,'2020-06-05 03:20:18','2020-06-05 03:20:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'db_bongobondhu'
--

--
-- Dumping routines for database 'db_bongobondhu'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-28  4:14:57
