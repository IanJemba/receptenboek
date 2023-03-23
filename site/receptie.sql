-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 06:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `receptie`
--

-- --------------------------------------------------------

--
-- Table structure for table `receptie`
--

CREATE TABLE `receptie` (
  `number` int(30) NOT NULL,
  `Initials` varchar(10) NOT NULL,
  `kok` varchar(50) NOT NULL,
  `eten` varchar(50) NOT NULL,
  `ingredienten` varchar(10000) NOT NULL,
  `Stap` mediumtext NOT NULL,
  `Image` mediumtext NOT NULL,
  `Tip` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptie`
--

INSERT INTO `receptie` (`number`, `Initials`, `kok`, `eten`, `ingredienten`, `Stap`, `Image`, `Tip`) VALUES
(10001, 'De Heer', 'Ian Jemba', 'Crème brûlée', '50 cl hele vloeibare verse room\r\n100g suiker\r\n6 eidooiers\r\n6 el. eetlepel bruine suiker of bruine suiker\r\n1 vanillestokje\r\nschaaltjes en keukenbrander...', 'Snijd het vanillestokje doormidden om de zaadjes eruit te halen\r\nVerwarm de room op laag vuur met de kruidnagel en laat trekken\r\nKlop de dooiers en de suiker + de vanillezaadjes krachtig op tot een schuimig mengsel\r\nGiet geleidelijk de lauwwarme en gefilterde room over het dooier/suikermengsel, onder voortdurend roeren\r\nVerwarm de oven voor op 160°C\r\nDoe de room in de schaaltjes en kook au bain-marie gedurende 30 tot 35 minuten, de room moet trillen als een vlaai.\r\nHaal uit de oven, zet de crèmes minimaal 4 uur in de koelkast\r\nGiet er een laagje suiker op en laat karameliseren met je brander.\r\nHeb je dit recept uitgeprobeerd?', 'creme.jpg', 'Het lekkerste karamellaagje krijg je door een gasbrander te gebruiken. Brand de crèmes pas vlak voor het serveren af, dan is het contrast tussen de knapperige laag en romige vulling het lekkerst! Je kunt de suiker ook onder de hete grill in een oven karamelliseren, maar dat heeft als nadeel dat het iets langer duurt waardoor de crème zelf ook warmer wordt.'),
(10002, 'De Heer', 'Cornelius Arne ', 'Croissants', '500 gr T55 bloem (of patentbloem)\r\n140 ml water, koud\r\n140 ml melk, koud\r\n10 gr zout\r\n12 gr gedroogde gist\r\n50 gr suiker\r\n30 boter, op kamertemperatuur', 'Doe alle ingrediënten voor het deeg bij elkaar en kneed hier een soepel deeg van. Je kunt het deeg met de hand kneden of een standmixer met deeghaak gebruiken. Kneed het deeg 4-5 minuten door en maak een bol van het deeg. Verpak de deegbol in plasticfolie en laat het minimaal 1 uur rusten in de koelkast. Nog beter is het om het deeg een dag in de koelkast te laten rusten.\r\nRoll de croissant.\r\nNa de tweede rijs is het tijd om de croissants te bakken. Verwarm de oven voor op 200 °C. Bestrijk de gerezen croissants met het losgeklopte ei en bak ze vervolgens 15-20 minuten, tot ze mooi goudbruin zijn.', 'croissant.jpg', 'Werk snel en zorg dat de ingrediënten koel zijn. Dit geldt als je het croissantdeeg maakt en de croissants rolt. Zo zorg je dat de boter in het deeg stevig blijft en niet wegsmelt. Dit zorgt voor de mooie laagjes in je croissants.\r\nDe beste croissants maak je thuis door het proces te verdelen over 3 dagen. Op dag 1 maak je het deeg en daarna laat je het een dag rusten in de koelkast. Op dag 2 toer je het deeg met de boter. Laat het vervolgens weer in de koelkast rusten. Op dag 3 kun je de croissants rollen, laten rijzen en afbakken.'),
(10003, 'Mevrouw', 'Pascal-Anne Stá ', 'Boeuf bourguignon', '600 gr riblappen of sucadelappen\r\n300 ml volle rode wijn\r\n300 gr blokjes ontbijtspek\r\n300 gr wortel\r\n2 blaadjes laurier\r\n1 grote ui\r\n300 ml water\r\n2 eetlepels bloem\r\npeper en zout\r\n1 blokje runderbouillon\r\n200 gr champignons (in plakjes)\r\n350 gr aardappels in blokjes\r\n1 blikje tomatenpuree\r\n1 teentje knoflook', 'Verhit een braadpan en voeg de spekjes toe. Bak deze 5 minuten iets krokant. Schep deze daarna uit de pan en schep het meeste vet er uit zodat er een klein beetje overblijft om het vlees in te bakken.\r\nSnijd het vlees in stukken van ca. 3 cm en doe in een kom. Breng op smaak met peper en zout en schep de bloem er door. Voeg daarna toe aan de pan en bak rondom mooi bruin.\r\nSnipper de ui en knoflook en voeg toe aan het vlees en bak even mee. Snijd ook de wortel in plakjes en voeg toe.\r\nRoer de tomatenpuree er door.\r\nSchenk na een paar minuten de rode wijn er bij en laat de alcohol verdampen.Voeg dan ook het water met het runderbouillon blokje en laurier blaadjes toe en breng zachtjes aan de kook. Laat de boeuf bourguignon ca. 2,5 uur zachtjes stoven met deksel op de pan.\r\nVoeg daarna de aardappel, champignons en spekjes toe en stoof nog ca. 25 minuten mee met de boeuf bourguignon.\r\n\r\n', 'boeuf.jpg', 'Heerlijk recept voor deze klassieke Franse stoofschotel met rundvlees, champignons en aardappels gestoofd in o.a. rode wijn.'),
(10004, 'De Heer', 'Kylian Mbappe', 'Churros/chichi\'s', '1 cup (250ml) water.\r\n1/4 cup (56g) unsalted butter, diced into small cubes.\r\n1 Tbsp (13g) granulated sugar.\r\n1 cup (141g) all-purpose flour (scoop and level to measure)\r\n1 large egg.\r\n1/2 tsp vanilla extract.\r\nVegetable oil, for frying.', 'For the coating whisk together 1/2 cup sugar and cinnamon in a shallow dish, set aside.\r\nHeat about 1 1/2 inches vegetable oil in a large pot or deep saute pan over medium-high heat to 360 degrees. Prepare the dough while oil is heating.\r\nAdd water, butter, sugar and salt to a large saucepan, bring to a boil over medium-high heat.\r\nAdd flour, reduce heat to medium-low and cook and stir constantly with a rubber spatula until mixture comes together and is smooth (a few lumps in it are fine).Transfer mixture to a large mixing bowl, let cool 5 minutes.Add vanilla and egg to flour mixture then blend immediately with an electric mixer.Carefully pipe mixture into preheated oil, into about 6-inch lengths, cut end with clean scissors.Transfer to paper towels to dry briefly, about 15 seconds (don’t wait too long or they’ll be dry and the sugar won’t stick as well).', 'chichis2.jpg', 'Use a candy thermometer for the oil (I own this one HERE). I think it’s a must so you can heat the oil to the proper temperature and monitor it as the churros fry. Preheat the oil while you make the batter because it will take time to come up to temperature.\r\nI like to stick with one egg in the batter. Some recipes use 3 eggs but I feel like they come out too eggy, some omit the eggs but the egg gives them some rise and a richer flavor so I found just one egg was perfect.\r\nUse a closed star piping tip (one with rounded off edges, like THIS), it gives the churros more defined edges. Which means crispier exterior and classic churro appearance.\r\nLet the dough rest before adding the egg, you don’t want to cook and scramble the egg into the batter. Keep in mind though the dough will still be really warm so have the mixer ready to go right after you add the egg and mix away.\r\nReally pay attention to the color as they fry. They never seem to need an exact amount of time, their golden brown color will let you know when each side is done. If undercooked they’ll seem raw in the center so wait for that golden brown shade.\r\nLet the churros drain on paper towels just briefly before you add them to the cinnamon sugar mixture. You don’t want them to be wet and oily and add straight to the sugar or they’ll just clump up the sugar and you’ll get too thick of a coating, but on the other hand you don’t want them to dry completely on the paper towels or the sugar won’t stick very well. Something like 15 seconds then roll.'),
(10005, 'Mevrouw', 'Anouk De Geest', 'Ratatouille', '1  ui\r\n1 teentje knoflook\r\n10  tomaten\r\n1  rode paprika\r\n4 takjes tijm\r\n1  groene courgette\r\n1  gele courgette\r\n1  aubergine\r\nolijfolie\r\nzout\r\nversgemalen peper', 'Verhit de olie in een pan en fruit de de ui en de knoflook. Voeg de paprika, stukjes en tomaat toe en laat langzaam garen tot een saus.\r\nPureer de saus en breng op smaak met zout en peper en verwarm de oven voor op 170 °C.\r\nDoe de saus in een pan of ovenschaal. Leg de plakjes groente om en om dakpansgewijs in de saus tot de hele pan vol is en dek af met een stuk met boter ingevet bakpapier.\r\nSchuif de pan in de voorverwarmde oven en bak circa 20 minuten tot de groenteschotel gaar is.', 'ratatouille.jpg', '\r\nBEREIDINGSWIJZE\r\nPel en snipper de ui en knoflook. Snijd 6 tomaten en de paprika in blokjes. Haal de tijmblaadjes van de takjes. Snijd de courgettes, aubergine en de rest van de tomaten in plakjes.\r\n\r\nVerhit de olie in een pan en fruit de de ui en de knoflook. Voeg de paprika, stukjes en tomaat toe en laat langzaam garen tot een saus.\r\n\r\nPureer de saus en breng op smaak met zout en peper en verwarm de oven voor op 170 °C.\r\n\r\nDoe de saus in een pan of ovenschaal. Leg de plakjes groente om en om dakpansgewijs in de saus tot de hele pan vol is en dek af met een stuk met boter ingevet bakpapier.\r\n\r\nSchuif de pan in de voorverwarmde oven en bak circa 20 minuten tot de groenteschotel gaar is.\r\n\r\nWat is ratatouille?\r\nRatatouille is een heerlijke Franse groentestoof, die zowel warm als koud gegeten kan worden. Dat het woord ratatouille Frans is, kan geen twijfel over bestaan, het woord is afgeleid van het Franse werkwoord touiller wat \'gemengd\' betekent. De basis van een ratatouille bestaat vaak uit een combinatie van rode paprika, knoflook, tomaten, aubergine en courgette.\r\n\r\nGeschiedenis van ratatouille\r\nRatatouille zou z’n oorsprong in 1778 in Frankrijk vinden, toen het er vooral ‘rata’ werd genoemd. Rata, zoals de militairen het gerecht noemden, was voor hen een mengsel van bonen, aardappelen, groenten en vet vlees. En vooral was het lekker snel en makkelijk klaar, zoals de militairen dat destijds graag hadden. Ratatouille zoals we dat nu kennen is hartstikke vegetarisch en bestaat vooral uit groenten. \r\n\r\nMaar de ratatouille (en waarschijnlijk ook ál die andere vergelijkbare gerechten) zoals we ‘m nu eten heeft naar alle waarschijnlijkheid een veel latere oorsprong dan 1778. Voor die tijd zouden nog helemaal niet alle ingrediënten in Europa verkrijgbaar zijn. Neem de aubergine, de courgette en de tomaat: allemaal ingrediënten die pas na de 16e eeuw naar Europa trokken. Sommigen nog veel later. \r\n\r\nWat eet je bij ratatouille?\r\nDeze Franse klassieker kun je met allerlei gerechten serveren. Wij noemen: brood, rozemarijn aardappeltjes, pasta of rijst. Til het Franse gerecht naar een nóg hoger niveau met een eitje. Verdeel de ratatouille in een ovenschaal, maak in het midden een kuiltje en breek het ei. Plaats de schaal 10 tot 15 minuten in de oven, tot het eiwit gestold is. Eet smakelijk!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receptie`
--
ALTER TABLE `receptie`
  ADD PRIMARY KEY (`number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
