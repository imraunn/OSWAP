-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 02:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`name`) VALUES
('aardvark'),
('albatross'),
('alligator'),
('alpaca'),
('ant'),
('anteater'),
('antelope'),
('ape'),
('armadillo'),
('ass'),
('baboon'),
('badger'),
('barracuda'),
('bat'),
('bear'),
('beaver'),
('bee'),
('bison'),
('boar'),
('buffalo'),
('galago'),
('butterfly'),
('camel'),
('caribou'),
('cat'),
('caterpillar'),
('cattle'),
('chamois'),
('cheetah'),
('chicken'),
('chimpanzee'),
('chinchilla'),
('chough'),
('clam'),
('cobra'),
('cockroach'),
('cod'),
('cormorant'),
('coyote'),
('crab'),
('crane'),
('crocodile'),
('crow'),
('curlew'),
('deer'),
('dinosaur'),
('dog'),
('dogfish'),
('dolphin'),
('donkey'),
('dotterel'),
('dove'),
('dragonfly'),
('duck'),
('dugong'),
('dunlin'),
('eagle'),
('echidna'),
('eel'),
('eland'),
('elephant'),
('elephant seal'),
('elk'),
('emu'),
('falcon'),
('ferret'),
('finch'),
('fish'),
('flamingo'),
('fly'),
('fox'),
('frog'),
('gaur'),
('gazelle'),
('gerbil'),
('giant panda'),
('giraffe'),
('gnat'),
('gnu'),
('goat'),
('goose'),
('goldfinch'),
('goldfish'),
('gorilla'),
('goshawk'),
('grasshopper'),
('grouse'),
('guanaco'),
('guinea fowl'),
('guinea pig'),
('gull'),
('hamster'),
('hare'),
('hawk'),
('hedgehog'),
('heron'),
('herring'),
('hippopotamus'),
('hornet'),
('horse'),
('human'),
('hummingbird'),
('hyena'),
('jackal'),
('jaguar'),
('jay'),
('jay, blue'),
('jellyfish'),
('kangaroo'),
('koala'),
('komodo dragon'),
('kouprey'),
('kudu'),
('lapwing'),
('lark'),
('lemming'),
('lemur'),
('leopard'),
('lion'),
('llama'),
('lobster'),
('locust'),
('loris'),
('louse'),
('lyrebird'),
('magpie'),
('mallard'),
('manatee'),
('marten'),
('meerkat'),
('mink'),
('mole'),
('monkey'),
('moose'),
('mouse'),
('mosquito'),
('mule'),
('narwhal'),
('newt'),
('nightingale'),
('octopus'),
('okapi'),
('opossum'),
('oryx'),
('ostrich'),
('otter'),
('owl'),
('ox'),
('oyster'),
('panther'),
('parrot'),
('partridge'),
('peafowl'),
('pelican'),
('penguin'),
('pheasant'),
('pig'),
('pigeon'),
('pony'),
('porcupine'),
('porpoise'),
('prairie dog'),
('quail'),
('quelea'),
('rabbit'),
('raccoon'),
('rail'),
('ram'),
('rat'),
('raven'),
('red deer'),
('red panda'),
('reindeer'),
('rhinoceros'),
('rook'),
('ruff'),
('salamander'),
('salmon'),
('sand dollar'),
('sandpiper'),
('sardine'),
('scorpion'),
('sea lion'),
('sea urchin'),
('seahorse'),
('seal'),
('shark'),
('sheep'),
('shrew'),
('shrimp'),
('skunk'),
('snail'),
('snake'),
('spider'),
('squid'),
('squirrel'),
('starling'),
('stingray'),
('stinkbug'),
('stork'),
('swallow'),
('swan'),
('tapir'),
('tarsier'),
('termite'),
('tiger'),
('toad'),
('trout'),
('turkey'),
('turtle'),
('viper'),
('vulture'),
('wallaby'),
('walrus'),
('wasp'),
('water buffalo'),
('weasel'),
('whale'),
('wolf'),
('wolverine'),
('wombat'),
('woodcock'),
('woodpecker'),
('worm'),
('wren'),
('yak'),
('zebra');

-- --------------------------------------------------------

--
-- Table structure for table `confidential`
--

CREATE TABLE `confidential` (
  `flag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confidential`
--

INSERT INTO `confidential` (`flag`) VALUES
('flag{d3mo_flag}');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
