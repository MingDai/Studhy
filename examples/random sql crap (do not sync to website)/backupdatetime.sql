-- phpMyAdmin SQL Dump
-- version 3.3.10.4
-- http://www.phpmyadmin.net
--
-- Host: sql.studhy.com
-- Generation Time: Mar 22, 2014 at 10:39 PM
-- Server version: 5.1.56
-- PHP Version: 5.3.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `studhybank`
--

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE IF NOT EXISTS `problems` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `subject` varchar(30) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `question` text NOT NULL,
  `a` varchar(8000) NOT NULL,
  `b` varchar(8000) NOT NULL,
  `c` varchar(8000) NOT NULL,
  `d` varchar(8000) NOT NULL,
  `e` varchar(8000) NOT NULL,
  `answer` char(1) NOT NULL,
  `numPplAns` int(255) NOT NULL,
  `difficulty` double(255,5) NOT NULL,
  `numPplDiff` int(255) NOT NULL DEFAULT '1',
  `udvote` int(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `subject`, `topic`, `question`, `a`, `b`, `c`, `d`, `e`, `answer`, `numPplAns`, `difficulty`, `numPplDiff`, `udvote`, `date`) VALUES
(33, 'Chemistry', 'Intermolecular Forces', 'Which one of the following elements forms ions with two different valences?', 'calcium', 'arsenic', 'iron', 'flouide', 'hydrogen', 'c', 2, 1.51722, 29, 10, '0000-00-00 00:00:00'),
(31, 'Chemistry', 'Intermolecular Forces', 'Which element is considered a covalent(network) solid?', 'Cr', 'O', 'Xe', 'B', 'Na', 'd', 1, 1.27272, 33, 10, '0000-00-00 00:00:00'),
(32, 'Chemistry', 'Intermolecular Forces', 'Which of the following indicates very strong intermolecular forces of attraction in a liquid?', 'A very low boiling point.', 'A very low critical temperature.', 'A very low heat of vaporization.', 'A very low vapor pressure.', 'A very low surface tension.', 'd', 1, 1.95000, 20, 2, '0000-00-00 00:00:00'),
(34, 'Chemistry', 'Intermolecular Forces', 'Which one of the following elements forms ions with two different valences?', 'calcium', 'arsenic', 'iron', 'flouide', 'hydrogen', 'c', 1, 1.30768, 26, 6, '0000-00-00 00:00:00'),
(35, 'Chemistry', 'Entropy', 'If &#916;H and &#916;S are both negative or positive, then &#916;G has a ______ sign.', 'positive', 'negative', 'variable', 'large', 'no', 'c', 1, 1.30000, 20, 6, '0000-00-00 00:00:00'),
(67, 'Statistics', 'Comparing Two Populations or Groups', 'A sociologist is studying the effect on the divorce rate of having children within the first three years of marriage. She selects a random sample of 400 couples who were married for the first time between 1990 and 1995 with both members of the couple aged 20 to 25. Of the 400 couples, 220 had at least one child within the first three years of marriage. Of the couples who had children, 83 were divorced within five years, while of the couples who didn''t have children, 52 were divorced within five years. Let p1 and p2 be the proportions of couples married in this time frame and divorced within five years who had children and didn''t have children, respectively. From the data, the estimate of p1 - p2 is ', '0.0884', '0.3100', '0.3375', '0', '1', 'a', 1, 1.00000, 9, 0, '0000-00-00 00:00:00'),
(41, 'United States History', 'Other', 'How many terms did George W. Bush serve?', '1', '2', '3', '4', '5', 'b', 1, 0.90321, 31, 4, '0000-00-00 00:00:00'),
(42, 'European History', 'Enlightenment', 'What was the nickname of Louis XIV?', 'The Micromanager', 'The 14th Great King', 'The Sun King', 'The Little Corporal', 'France''s Saviour', 'c', 1, 0.44444, 27, 4, '0000-00-00 00:00:00'),
(43, 'Calculus', 'Other', 'What is the difference between MacClaurin series and Taylor series?', 'MacClaurin models functions centered about zero, whereas Taylor is more generic', 'Taylor models functions centered about zero, whereas MacClaurin is more generic', 'Taylor series uses factorials, whereas MacClaurin uses combinatoric methods', 'MacClaurin series can only handle logarithmic functions, whereas Taylor is more generic', 'Nothing; They are two names for the same thing.', 'a', 1, 0.81581, 38, 3, '0000-00-00 00:00:00'),
(44, 'Physics', 'Other', 'A very large loop of metal wire with radius 1 meter is driven with a linearly increasing current at a rate of 200 amps/second. A very small metal wire loop with radius 5 centimeter is positioned a small distance away with its center on the same axis (the loops are coaxial). The small loop experiences an induced emf of 983 nano-volts. What is the separation of the loops in meters? Note that a subtraction step in the solution makes it sensitive to significant figures. Keep at least four figures in your calculation.', '.0005776 m', '1.856 m', '.01211m', '.05181 m', '.3333 m', 'd', 1, 1.53572, 28, 5, '0000-00-00 00:00:00'),
(45, 'United States History', 'Other', 'What was the political ideology of the United States that protected the Latin American nations from European Powers, for the purpose of self-determined popular rule?', 'Isolationism', 'Monroe Doctrine', 'Democratization', 'Ostend Manifesto', 'Militant Republicanism', 'b', 1, 1.28572, 14, 5, '0000-00-00 00:00:00'),
(47, 'World History', 'Other', 'Which power couple of the 1400s dominated European politics through their combination of their respective kingdoms, forming a powerful seafaring empire?', 'Mary and Charles', 'Henry and Catherine', 'Jason and Theresa', 'Ferdinand and Isabella', 'Ayonakapous and Seris', 'd', 1, 1.10000, 10, 3, '0000-00-00 00:00:00'),
(50, 'Calculus', 'Other', 'What is the indefinite integral of f(x) = (1/2)(x^2)(sin(x))+(1/2)(x^3)(cos(x)) ?', '(1/2)(x)(x^2-6)sin(x)+(x^2-2)cos(x)+C', '(1/2)(x)(x^2-4)sin(x)+(x^2-2)cos(x)+C', '(1/2)(x)(x^2-4)sin(x)+(1/2)(x^2-4)cos(x)+C', '(1/2)(x^2-4)sin(x)-x(x^2-2)cos(x)+C', '(1/2)(x)(x^2-6)sin(x)-(x^2-2)cos(x)+C', 'b', 1, 0.70000, 20, -3, '0000-00-00 00:00:00'),
(51, 'United States History', 'American Revolution', 'How much swag did George Washington have?', 'Like 41', '1776', '69', '42', '1783', 'e', 1, 1.44445, 18, -3, '0000-00-00 00:00:00'),
(65, 'Biology', 'Endocrine System', 'What hormone does the Posterior Pituitary Gland secrete?', 'FSH', 'TSH', 'Oxytocin', 'Adrenaline', 'Prolactin', 'c', 1, 1.33333, 6, 1, '0000-00-00 00:00:00'),
(66, 'Literature', 'Other', 'In the book, The Great Gatsby by F.Scott Fitzgerald, Daisy Buchanan is described as a girl with a voice full of:', 'deception', 'honey', 'money', 'love', 'happiness', 'c', 0, 3.00000, 1, 0, '0000-00-00 00:00:00'),
(55, 'Computer Science', 'Other', '4 + 5 = 8. What is the the answer in binary?', '0011011000111100101010101010101010101011111100100010111000111001 lbs', '0010111010100101010101010101010010101010101000101010101010101010 lbs', '0011011000111001001101100011100100110110001110010011011000111001 lbs', '1011011010101000010101010111010100101010101010010101011000111001 lbs', '1001011110100101010001010111101010010101010100101010001011111100 lbs', 'c', 2, 0.50000, 18, -2, '0000-00-00 00:00:00'),
(56, 'Language', 'Other', 'Before the Great Vowel Shift, "boot" was pronounced most like which modern English word?', 'boot', 'bought', 'but', 'boat', 'bat', 'd', 1, 0.78947, 19, 4, '0000-00-00 00:00:00'),
(57, 'Language', 'Other', 'Which of the following languages is not in the Indo-European family?', 'Hungarian', 'Norwegian', 'Bengali', 'Ukranian', 'Greek', 'a', 1, 1.04762, 21, 4, '0000-00-00 00:00:00'),
(58, 'Language', 'Other', 'The two sets of Russian consonants differ in which trait?', 'length', 'voicing', 'aspiration', 'palatalization', 'prenasalization', 'd', 1, 0.93751, 16, 4, '0000-00-00 00:00:00'),
(59, 'Language', 'Other', 'Which English consonant differs in place of articulation from the others?', 'n', 'd', 'sh', 't', 'l', 'c', 1, 0.63158, 19, 4, '0000-00-00 00:00:00'),
(60, 'Language', 'Other', 'Which of the following languages is not in the Afro-Asiatic family?', 'Hebrew', 'Somali', 'Arabic', 'Maltese', 'Turkish', 'e', 1, 0.23077, 13, 1, '0000-00-00 00:00:00'),
(61, 'Language', 'Other', 'Which of the following words contains a diphthong?', 'soon', 'seen', 'sane', 'son', 'sin', 'c', 1, 0.84615, 13, 3, '0000-00-00 00:00:00'),
(62, 'Language', 'Other', 'Which of the following languages has the fewest native speakers?', 'Korean', 'Italian', 'Telugu', 'Urdu', 'Portuguese', 'b', 1, 0.40000, 10, 0, '0000-00-00 00:00:00'),
(64, 'Calculus', 'Conics, Parametric Equations, ', 'Which of the following is generally recognized as a function of the columella?', 'Water absorption', 'Perception of gravity', 'Support', 'Lubrication of rootcap', 'Apical meristem', 'b', 1, 0.57143, 7, 1, '0000-00-00 00:00:00'),
(68, 'Statistics', 'Comparing Two Populations or Groups', 'For a simple random sample of 100 cars of a certain popular model in 2009, it was found that 20 had a certain minor defect in the brakes. For an independent SRS of 400 cars of the same model in 2004, it was found that 50 had the same defect. Let p1 and p2 be the proportions of all cars of this model in 2003 and 2004, respectively, that have the defect. A 90% confidence interval for p1 - p2 is (approximately) ', '0.075 ± 0.085', '0.075 ± 0.071', '0.075 ± 0.043', '0.075 ± 0.100', '0.075 ± 0.064', 'b', 0, 3.00000, 1, 0, '0000-00-00 00:00:00'),
(69, 'Statistics', 'Comparing Two Populations or Groups', 'For which of the following choices of n1, n2, p-hat1, and p-hat2 would we be able to use the level C confidence interval recipe based on the standard Normal distribution to estimate p1 - p2? (Assume that the population sizes are both 10 times as large as the sample sizes.) ', 'n1 = 50, n2 = 50, p-hat1 = 0.05, p-hat2 = 0.10', 'n1 = 100, n2 = 100, p-hat1 = 0.16, p-hat2 = 0.10', 'n1 = 20, n2 = 20, p-hat1 = 0.50, p-hat2 = 0.20', 'All of the above', 'None of the above', 'b', 1, 1.50000, 2, 0, '0000-00-00 00:00:00'),
(70, 'Statistics', 'Comparing Two Populations or Groups', 'For a simple random sample of 100 cars of a certain popular model in 2009, it was found that 20 had a certain minor defect in the brakes. For an independent SRS of 400 cars of the same model in 2004, it was found that 50 had the same defect. Let p1 and p2 be the proportions of all cars of this model in 2003 and 2004, respectively, that have the defect. We wish to test H0: p1 = p2 against Ha: p1 > p2. For this test, the (approximate) P-value is ', '0.0418', '0.0536', '0.0268', '0.0686', '0.1671', 'c', 1, 1.50000, 4, 1, '0000-00-00 00:00:00'),
(71, 'Statistics', 'Comparing Two Populations or Groups', 'A manufacturer receives parts from two suppliers. An SRS of 400 parts from Supplier 1 contains 20 defectives, while an independent SRS of 100 parts from Supplier 2 contains 10 defectives. Let p1 and p2 be the proportions of defectives for all parts made by Supplier 1 and Supplier 2, respectively. Is there evidence of a significant difference in the proportions of defective parts made by these two suppliers? To answer this question, you test the hypotheses H0: p1 = p2 , Ha: p1 &#8800; p2. The P-value of the test is ', '0.1164', '0.0602', '0.0301', '0.8432', '0.0354', 'b', 1, 1.50000, 2, 0, '0000-00-00 00:00:00'),
(72, 'Statistics', 'Comparing Two Populations or Groups', 'Scores on this year''s SAT Math (SAT-M) test for students taking the SAT-M for the first time are believed to be Normally distributed with mean &#956;1. For students taking the test for the second time, this year''s scores are also believed to be Normally distributed but with a possibly different mean &#956;2. The standard deviations of SAT-M scores for first- and second-time test takers appear to stay relatively consistent from year to year and can be assumed known, with value &#963;1 = 100 for first-time test takers and value &#963;2 = 90 for second-time test takers. Independent random samples were obtained of 100 students who took the SAT-M for the first time this year and 36 students who took the SAT-M for the second time this year. The sample mean score for the 100 first-time test takers was x-bar1 = 504.5, and the sample mean score for the 36 second-time test takers was x-bar2= 539.1. A 95% confidence interval for the difference &#956;2 - &#956;1 is ', '34.6 ± 29.66', '34.6 ± 35.33', '-34.6 ± 35.33', '-34.6 ± 29.66', '0', 'b', 1, 1.20000, 5, 0, '0000-00-00 00:00:00'),
(73, 'Statistics', 'Comparing Two Populations or Groups', 'A researcher wishes to compare the effects of two stepping heights (low and high) on heart rate in a step-aerobics workout. A sample of 50 adults in roughly similar physical condition was randomly divided into two groups of 25 subjects each. Group 1 did a standard step-aerobics workout using the low stepping height. The sample mean heart rate at the end of Group 1''s workout was x-bar1 = 90 beats per minute (bpm), with a sample standard deviation of s1 = 9 bpm. Group 2 did the same workout but used the high stepping height. The sample mean heart rate at the end of Group 2''s workout was x-bar2 = 95.08 bpm, with a sample standard deviation of s2 = 12 bpm. Assume that the two sets of data are independently generated and that both data distributions are approximately Normal. Let &#956;1 and &#956;2 represent the mean heart rates we would observe for the entire population of interest if all members of the population did the workout using the low and high stepping height, respectively. Suppose that the researcher wishes to test the hypotheses H0: &#956;1 = &#956;2, and Ha: &#956;1 < &#956;2. Using the conservative value for the number of degrees of freedom, the P-value of the test is ', 'larger than 0.10', 'between 0.05 and 0.10', 'between 0.01 and 0.05', '0', 'All of the above', 'b', 1, 0.66667, 6, 0, '0000-00-00 00:00:00'),
(74, 'Statistics', 'Comparing Two Populations or Groups', 'Some agricultural researchers have conjectured that stem-pitting disease in peach-tree seedlings might be controlled through weed and soil treatments. An experiment was conducted to compare seedling growth with soil and weeds treated with one of two herbicides. In a field containing 10 seedlings, five were randomly selected and assigned to be treated with Herbicide A. The remaining five seedlings were treated with Herbicide B. Soil and weeds for each seedling were treated with the appropriate herbicide. At the end of the study period, the height (in centimeters) was recorded for each seedling. A 90% confidence interval for the difference &#956;A - &#956;B in mean seedling height for the two herbicides was found to be (0.2, 14.6). From this result, which of the following statements is correct? ', 'The P-value for a test of H0: &#956;A = &#956;B against Ha: &#956;A &#8800; &#956;B would be greater than 0.10 because the interval doesn''t contain 0.', 'A 95% confidence interval would not include 0 either because we would be even more confident that a significant difference exists between the two groups.', 'Neither (A) nor (B) is correct.', 'Tim Deng is the sexiest man alive.', 'D.', 'c', 1, 0.28571, 7, 0, '0000-00-00 00:00:00'),
(75, 'Statistics', 'Comparing Two Populations or Groups', 'SAT scores of entering freshmen at X University have a Normal distribution with mean &#956;1 = 1200 and standard deviation &#963;1 = 90, while the SAT scores of entering freshmen at Y University have a Normal distribution with mean &#956;2 = 1215 and standard deviation &#963;2 = 110. Independent random samples of 100 freshmen are selected from each university. The probability that the sample mean from X University exceeds the sample mean from Y University is ', '0.1446', '0.0475', '0.8554', '0', '1', 'a', 1, 1.25000, 4, 0, '0000-00-00 00:00:00');

--
-- Triggers `problems`
--
DROP TRIGGER IF EXISTS `myTable_OnInsert`;
DELIMITER //
CREATE TRIGGER `myTable_OnInsert` BEFORE INSERT ON `problems`
 FOR EACH ROW SET NEW.date = IFNULL(NEW.date, NOW())
//
DELIMITER ;
