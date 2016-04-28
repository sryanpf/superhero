-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2016 at 11:32 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superheroes`
--

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE IF NOT EXISTS `guests` (
  `guest_id` smallint(6) NOT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `first_name` varchar(40) DEFAULT NULL,
  `birth_date` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`guest_id`, `last_name`, `first_name`, `birth_date`, `email`) VALUES
(1, 'Stark', 'Tony', '08/25/1978', 'Tstark@avengers.com'),
(2, 'Rhodes', 'James', '06/14/1976', 'WMRox@yahoo.com'),
(3, 'Doom', 'Victor', '04/10/1970', 'IamDoom@gmail.com'),
(4, 'Ultron', 'Ultron', '5-12-2015', 'Ultron@ultron.ultron'),
(89, 'Bruce', 'Wayne', '02/19/1988', 'B-man@waynetech.com');

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE IF NOT EXISTS `heroes` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `ability` text NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `img` varchar(200) NOT NULL,
  `quantAvailable` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `name`, `ability`, `description`, `price`, `img`, `quantAvailable`) VALUES
(1, 'Ant-Man', 'Shrink and grow to unimaginable sizes!', 'Ant-Man.  As small as an ant, as deadly as a bullet.  We have recreated the Pym Particle as well as the Ant-Man suit to safely sustain the human body as it grows to the size of a building and shrinks smaller than the eye can see.  With this combination of science and technology, the user will be able to infiltrate virtually any facility with the highest levels of security without ever being seen, or grow to a size that can shrug off rounds fired from an M1A1 Abrams battle tank.  The most amazing feat of the Ant-Man suit is the ability to not only shrink to the size of an insect, but to retain the strength you would normally have at full size.  Because of the abilities to grow and shrink rapidly, the Ant-Man suit can turn its user into a very deadly weapon.\r\n\r\nWith the Ant-Man package, you get:\r\n\r\n-Ant-Man Suit\r\n-Supply of 2 Pym Particle vials (additional vials sold separately)', 900000000000000, '', 3),
(2, 'Black Panther', 'Extraordinary martial skills and combative knowledge.', 'We have been able to re-create the suit, weapons, and abilities of Black Panther.  The suit is made of a vibranium weave protecting the wearer from virtually every form of harm (excluding concussive blasts).  The suit is woven is such a way that it provides maximum protection while remaining totally unhindering.  The main weapons of Black Panther are a pair of twin Vibro-blades made of vibranium which are possible for us to recreate thanks to our arrangement with a native people of an undisclosed country.  Being vibranium, the blades are able to pierce and cut through any material, including other certain objects made of vibranium.  Along with the Vibro-blades, Black Panther has been known to use retractable vibranium claws.  In order to incapacitate and capture his prey, the Black Panther also uses an electro-shock net which is stored small enough to carry on the waist and expands to cover approximately a 10 ft radius.  In addition to the weapons and suit, you will also get a supply of the herb that Black Panther uses to heighten his senses and physical prowess to super-human levels.  The effects of the herb rival, if not, surpass the physical effects of the Captain America Super-Soldier serum, with the drawback of the effects of not being permanent.  While under the effects of the herb, the user will be able to run at speeds of approximately 60 mph, and be able to lift nearly an entire ton of weight with little effort.  We have also observed Black Panther''s movements and tactics in combat and have created holographic simulations to train the participants to fight like the deadly Black Panther.\r\n\r\nWith the Black Panther package, you get:\r\n-Vibranium woven Black Panther suit with retractable claws\r\n-Twin Vibro-blades\r\n-5 Electro-shock nets\r\n-10 uses worth of the ability enhancing herb\r\n-Black Panther Holographic Simulation\r\n', 8000000000000, '', 2),
(3, 'Captain America', 'Superhuman, expert hand-to-hand combatant, master tactition', 'We have finally done it!  After countless failed attempts from many others ranging from the Nazi''s attempt resulting in Red Skull to the disasterous experiements which made Bruce Banner into the Hulk, it is our scientists who have finally successfully recreated the Super-Soldier Serum which made Brooklyn native Steve Rogers into the famous Captain America thanks to several blood samples recovered from battle sites.  Not only have we done the impossible with re-creating the formula, we have worked out a deal with the natives of an undisclosed country to have unlimited access to a nearly limitless supply of vibranium.  Not only will you be granted peak physical and mental perfection, but you will also be able to wield an iconic indestructable vibranium shield as well.  The Serum unlocks the ability to instantly transform the human body to the absolute best it could possibly be.  With the serum, you can accomplish feats such as being able to lift approximately 1,500 lbs easily, and run at full speed approximately 55-60 mph.  In an every day light jog, you can cover 13 miles in 30 minutes easily.  The serum also gives the user super-human endurance.  You will be able to perform any physical activity at maximum effort for a nearly endless duration.  Please note that the serum also raises the user''s metabolism to extreme levels, rendering the effect of intoxication nearly impossible.  In addition to the physical enhancements, the user''s mental processing capabilities will be dramatically increased.  In lamens terms, you will be able to see in slow motion.  From careful observation of Captain America''s performance in combat, we have created holographic simulations which will train the participants to fight and strategize like Captain America.\r\n\r\nWith the Captain America Package, you will get:\r\n\r\n-Super-Soldier Serum injections\r\n-Circular Vibranium Shield (with or without graphics)\r\n-Captain America Holo-training Simulations\r\n\r\nDue to the Super-Soldier Serum''s effects being permanent, we will not be selling the formula for any price.', 250000000000, '', 1),
(4, 'Iron Man', 'Unmatched intelligence, impeccable business knowledge, combative abilities and unprecedented wealth', 'It is no longer a secret.  We have successfully recreated the Ironman suits.  Tony Stark and James Rhodes are no longer the only one man armies patrolling the skies.  Our engineers have been able to build miniaturized Arc reactors which power the suits.  Our scientists have also determined from armor fragments left behind at battle sites that most of the Ironman suits are made from a nickel-titanium alloy.  Engineers have also recreated Ironman''s plasma thruster technology granting the suits the ability of flight.  Now, the suits are not referred to as one man armies for nothing.  All of Ironman''s and Warmachine''s weapon systems have been implemented into the respective suits.  With the Ironman suits (and depending on the specific model), you can expect to find the standard armament of repulsors found on the palms and chest which can be fired at various energy levels ranging from non-lethal blasts, to blasts powerful enough to punch through most battle tank armor.  Shoulder mounted Micro-missiles that work in perfect harmony with the incredibly accurate targeting systems to neutralize up to twenty-four targets at once.  One time use laser cartrigaes concealed in the forearms able to cut through nearly any material.  Shoulder mounted riot suppression systems that can render up to twenty-four hostiles unconsious.  In addition to these state of the art weapon systems, the suit''s joints are made up of servos powerful enough to lift over 2 tons of weight with little effort.  With the Warmachine suits, you can expect to find similar Ironman armaments (minus the forearm mounted lasers), in addition to; twin mini-guns mounted on the forearms.  Single shoulder mounted gatling gun that works with an automated targeting system and swivel that allows for 360 degree operation.\r\n\r\nWith the Ironman Package, you get:\r\n-Fully armed Ironman suit of your choosing\r\n\r\nFor an additional $20,000,000.00 upgrade to the Warmachine package for extra firepower!\r\n\r\nWe also provide re-arming services.', 200000000000, '', 1),
(5, 'Winter Solider', 'Superhuman strength, expert hand-to-hand combatant, expert marksman, bionic arm, unshakable dedication', 'James Buchanan ''Bucky'' Barnes, best friend of Captain America/Steve Rogers.  As you may know, Bucky Barnes was thought to have been killed during WWII on a mission to capture the genius HYDRA scientist Arnim Zola.  During the mission, Barnes fell from the HYDRA train which Zola was aboard several hundred feet to his appearant death.  Instead of parishing in the frozen ravine, Barnes was retrieved by Russian forces and later turned over to HYDRA to be the subject of various experiements and enhancements which would ultimately turn him into the ultimate Soviet Assassin codenamed The Winter Soldier.  As a result of the experiements and training, his abilities include; being at peak physical perfection thanks to a serum very similar to the one used to create Captain America, total mastery of every firearm, an expert hand-to-hand combatant, and a high tech prosthetic left arm which allows for super human feats.  He never misses his mark, and when he is given a mission, he will go to any measure to accomplish his task.  After observing The Winter Soldier in action, we have created a Holographic Simulation designed to train participants to fight in combat like him.  His standard arsenal includes, but is not limited to; a Barrett .50 cal sniper rifle, a .556 calibur M4 carbine with an underslung grenade launcher, a 9mm Scorpion sub-machine gun, 9mm Sig Saur pistol, various grenades, and a Combat Knife.  Unfortunately for this particular package, you will have to select an arm for amputation.\r\n\r\nWith the Winter Soldier package, you get:\r\n-Super-Soldier Serum\r\n-Bionic Arm (left or right)\r\n-Full Arsenal Mentioned Above\r\n-Light Weight Kevalar Body Armor\r\n-The Winter Soldier Holo-simulation\r\n\r\nWe also provide armament resupply services.', 300000000000, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `guest_id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
