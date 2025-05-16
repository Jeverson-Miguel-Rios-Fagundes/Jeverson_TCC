-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Nov-2023 às 20:01
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ppi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `historia`
--

DROP TABLE IF EXISTS `historia`;
CREATE TABLE IF NOT EXISTS `historia` (
  `id_historia` int NOT NULL,
  `texto` text,
  `nome_imagem` varchar(255) DEFAULT NULL,
  `escolha1` int DEFAULT NULL,
  `texto1` varchar(255) DEFAULT NULL,
  `escolha2` int DEFAULT NULL,
  `texto2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_historia`),
  KEY `fk_escolha1` (`escolha1`),
  KEY `fk_escolha2` (`escolha2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `historia`
--

INSERT INTO `historia` (`id_historia`, `texto`, `nome_imagem`, `escolha1`, `texto1`, `escolha2`, `texto2`) VALUES
(0, 'Ethan: \"Eu sou Ethan, um cidadão de uma velha cidade e um dos raros sobreviventes da bactéria. Sou formado em física e química. Possuo conhecimentos úteis como manuseio de armas, uso de mapas, bússolas, orientação solar e treinamento tático que aprendi com meu pai, um agente aposentado. Eu estou sozinho e não confio em ninguém.\"', '', 2, 'Prosseguir', 0, ''),
(1, 'Você à atacou, mas essas pessoas não morrem facilmente.', '', 0, '', 0, ''),
(2, 'No dia 10/05/2017, Ethan sai para o trabalho e acaba sofrendo um acidente de carro que o deixa  em coma, por dois anos.', '', 3, 'Prosseguir', 0, ''),
(3, 'Ethan ao recuperar sua consciência, acorda em sua casa. Ao olhar pela janela, vê que tudo está diferente dos dias que ele lembrava. Um dia extremamente silencioso e vazio é estranho, pois o local onde mora é muito movimentado, então ele percebe que a cidade está completamente vazia, com carros abandonados e ruas desertas. Isso deixa-o assustado. TOC TOC TOC - há alguém batendo em sua porta. Deseja abrir a porta?', '', 4, 'Sim', 5, 'Não'),
(4, 'Você abre a porta e há uma pessoa estranha, bastante inquieta. Você pergunta “o que está acontecendo?”. Logo em seguida, quando você menos espera, a pessoa acaba te atacando e você cai no chão e fere sua perna.  Porém, consegue pegar algo para se defender e derruba o agressor causando assim sua morte. Após o acontecimento você vai até a janela e vê um monte de pessoas vindo em direção a sua casa. Aterrorizado, você foge pelos fundos de sua casa e vai em direção ao centro da cidade.', '', 11, 'Prosseguir', 0, ''),
(5, 'Você não abre a porta e percebe que a porta parou de ser batida. então você decide ir até à janela e vê varias pessoas vindo correndo e cercando a sua casa. e você vê que estão ali para te fazer mal, Aterrorizado, você se esconde rapidamente dentro da garagem, e aquelas pessoas descontroladas invadem a sua casa em busca de achar você para mata-lo. ', '', 6, 'Fugir da garagem com seu carro', 8, 'Fugir da garagem a pé'),
(6, 'Você não consegue ligar o carro, porque o motor está fundido, o barulho do carro acaba chamando a atenção das pessoas e elas vão direto para o porão. elas o pegam e lhe matam.', '', 0, '', 0, ''),
(7, 'Após o ocorrido, você vai até o hospital.', '', 13, 'Prosseguir', 0, ''),
(8, 'Ok, você consegue fugir sem as pessoas perceberem. Por onde deseja seguir sua jornada:', '', 9, 'Floresta ', 11, 'Cidade'),
(9, 'Talvez não tenha sido uma boa escolha, você não tem recursos para ir pela floresta.', '', 10, 'Prosseguir', 0, ''),
(10, 'Indo em direção a floresta, você lembra de sua esposa Caroline e vai a procura dela. Indo a floresta, você cai em uma armadilha e fica inconsciente. Quando você acorda, acaba sendo assado em uma fogueira de um povo desconhecido, e você morre.', '', 0, '', 0, ''),
(11, 'Você segue na cidade em direção ao centro da mesma, onde se depara com uma loja de conveniência e um hospital. Onde você deseja ir primeiro?', '', 12, 'Loja de conveniências: para procurar suprimentos os  úteis, como: água, alimentos etc.', 13, 'Hospital: Para verificar se não há algum sobrevivente e ver se consegue achar alguns kits de primeiros socorros'),
(12, 'Chegando lá, você consegue achar suprimentos, e encontra uma faca. Saindo da loja, você vê uma pessoa indo em direção a loja. o que fazer?', '', 1, 'Tentar matá-la', 7, 'Sair pelos fundos'),
(13, 'Chegando ao hospital, você encontra pessoas contaminadas perambulando por toda parte, então resolve ir embora o mais rápido possível, antes que seja visto. Após correr desesperadamente, você acha uma casa abandonada.', '', 14, 'Entrar na casa', 15, 'Seguir correndo'),
(14, 'Entrando na casa, encontra uma arma. Ao vasculhar mais a casa, você encontra logo abaixo da cama um arsenal e você vê que o lugar não se trata de apenas uma casa, e sim a casa de um caçador, que tinha todo tipo de arma. Você pode escolher apenas 3 itens. Escolha sabiamente. ', '', 16, '1-Lança-chamas; pistola e coquetel-molotov', 17, '2- Fuzil; colete balístico e granada'),
(15, 'Você  tropeça e se fere.', '', 23, 'Se curar', 24, 'Seguir correndo mesmo machucado'),
(16, 'Ok, você está armado agora. Você sai da casa e escuta barulhos estranhos. Há pessoas vindo em sua direção. O que deseja fazer?', '', 19, 'Usar o armamento que acabou de adquirir', 15, 'Fugir, pois são muitos.'),
(17, 'Ok, você está armado agora. Você sai da casa e escuta barulhos estranhos. Há pessoas vindo em sua direção. O que deseja fazer?', '', 15, 'Fugir, pois são muitos.', 18, 'Usar o armamento que acabou de adquirir'),
(18, 'Se escolheu a opção 2(Você não consegue matar as pessoas e elas acabam o matando.', '', 0, '', 0, ''),
(19, 'Se escolheu a opção 1(Você consegue matar eles com o lança-chamas e o coquetel-molotov) tanto o lança quanto o coquetel são reações químicas instantâneas.', '', 20, 'Prosseguir', 0, ''),
(20, 'Após a saída da casa, você vai à procura de um lugar segura, pois você não sabe o que está acontecendo. No caminho, você encontra uma árvore linda. Era uma árvore chamada: Carvalho Europeu, ela tem uma superfície lisa e quase sem brilho, tem cheiro e gosto imperceptível. Você avista uma multidão de pessoas. O que deseja fazer?', '', 21, 'Subir na árvore', 22, 'Sair correndo'),
(21, 'Você sobe no Carvalho Europeu e as pessoas não o veem, mas por conta da árvore ser lisa você acaba escorregando e cai na frente das pessoas, e elas acabam o matando', '', 0, '', 0, ''),
(22, 'Você sai correndo, mas acaba chamando a atenção e as pessoas acabam te perseguindo. Correndo, você tropeça e se machuca, causando sua morte.', '', 0, '', 0, ''),
(23, 'Você para para se curar, mas os infectados te contaminam e acaba matando-o.', '', 0, '', 0, ''),
(24, 'Você consegue achar uma base onde pessoas podem o abrigar.', '', 25, 'Prosseguir', 0, ''),
(25, 'As pessoas lhe curam e lhe dão onde dormir. Lá tinha pessoas de todos as classes sociais, como: a nobreza e camponeses. Algumas das pessoas começaram a ficar estranhas, com um comportamento igual àquela pessoa que o atacou em sua casa. Deseja avisar ao chefe da base que há gente com comportamento estranho na base?', '', 27, 'Sim', 26, 'Não'),
(26, 'Você não avisou as pessoas e todos da base foram atacados repentinamente. Todos da base, incluindo você, morreram.', '', 0, '', 0, ''),
(27, 'Você avisa o Sebastião (chefe da base), e ele consegue intervir em um ataque daquelas pessoas. O chefe da base faz uns testes com as pessoas envolvidas e descobre que aquela se trata de uma doença nova, à qual eles dão o nome de doença de “Cryses”. Sebastião também descobre que as pessoas infectadas têm vulnerabilidade ao fogo. Após descobrir essa informação, você sai para matar essas criaturas. Você chega perto de um acampamento e cai em uma emboscada. Sebastião trouxe alguns coquetel- molotov. O que seria o melhor a se fazer?', '', 29, 'Ficar e lutar, pois você têm alguns coquetel-molotov', 28, 'Fugir com os seus amigos para a base'),
(28, 'Você saí pelos fundos, mas infelizmente você é capturado e executado.', '', 0, '', 0, ''),
(29, 'Você consegue matar todos que foram atacá-los usando o coquetel-molotov.', '', 30, 'Prosseguir', 0, ''),
(30, 'Após o acontecimento, vocês voltam para a base para descansar. Ao ir dormir você lembra de Caroline, sua esposa e começa a ficar desesperado por não saber onde ela está. Esse desespero faz com que você saia escondido da base à procura dela pela floresta.', '', 31, 'Prosseguir', 0, ''),
(31, 'Você vai em busca de Caroline e consegue achá-la em uma cabana.', '', 32, 'Levar ela para a base em busca da cura', 39, 'Matar ela, pois não tem certeza se consegue curá-la'),
(32, 'Você consegue conversar com Caroline e faz com que ela aceite ir com você até a base em busca da cura. Chegando na base, você esconde ela em seu quarto com medo de que o Sebastião a encontre e a mate.', '', 33, 'Prosseguir', 0, ''),
(33, 'E o que você mais temia aconteceu: Sebastião encontra Caroline debaixo de sua cama, mas para sua surpresa, Sebastião não à mata, pois quer usá-la como cobaia.', '', 34, 'Você não deixa Sebastião fazer isso', 37, 'Você concorda pelo bem de todos'),
(34, 'Você lembra que ele já têm pessoas com Cryses como cobaia, ele não precisa de Caroline para fazer testes. Você tem a impressão que Sebastião quer matar sua esposa, então você elabora um plano para escapar da base. Qual seria esse plano?', '', 35, 'Esperar ficar a noite para fugirem?', 36, 'Se passarem por guardas?'),
(35, 'No período noturno, a guarda é dobrada. Você é pego fugindo com Caroline e são mortos porque Sebastião pensou que você estava conspirando contra ele.', '', 0, '', 0, ''),
(36, 'Vocês conseguem passar despercebidos e fogem da base. Após sair da base, você percebe algo diferente, sua mulher armou uma emboscada para você e infelizmente você pescou o coringa.', '', 0, '', 0, ''),
(37, 'Sebastião começa os testes e descobre que eles morrem com uma bala de prata no coração, sim ele fez esse teste com ela. Você fica feliz por um momento, até perceber como ele descobriu isso?', '', 38, 'Prosseguir', 0, ''),
(38, 'Você percebe o que aconteceu e tu ataca Sebastião causando a morte dele, isso causa barulho e os guardas são alertados e acabam te matando.', '', 0, '', 0, ''),
(39, 'Ela percebe que você está com um comportamento hostil e acaba te atacando e  ferindo. Após feri-lo, ela sai correndo, lutando contra sua própria mente. Você consegue se levantar, mas tem a má sorte de encontrar um Leopardo. O que fazer nessa situação?', '', 41, 'Sair correndo, pois ele pode te atacar a qualquer momento', 40, 'Bancar o machão, mostrar que é você que manda'),
(40, 'Ele vai embora, mas por você estar ferido, você cai e acaba desmaiando. Infelizmente, o Leopardo volta e acaba o devorando.', '', 0, '', 0, ''),
(41, 'Você correu, mas não foi suficiente. Ele te alcança e te estraçalha.', '', 0, '', 0, ''),
(42, 'Isso se tratava de um sonho de Ethan, felizmente ele consegue acordar do coma e o mundo está todo normal, até que...', '', 43, 'Prosseguir', 0, ''),
(43, '27/10/2030     A sobrevivência de Ethan - parte 2.', '', 0, '', 0, ''),
(100, 'Ethan: \"I am Ethan, a citizen of an old town and one of the rare survivors of the bacteria. I have a degree in physics and chemistry. I have useful knowledge such as handling weapons, using maps, compasses, solar orientation and tactical training that I learned from my father, a retired agent. I\'m alone and I don\'t trust anyone.\"', '', 102, 'Next', 0, ''),
(101, 'You attacked her, but these people don\'t die easily.', '', 0, '', 0, ''),
(102, 'On May 10, 2017, Ethan leaves for work and ends up in a car accident that leaves him in a coma for two years.', '', 103, 'Next', 0, ''),
(103, 'Ethan, upon regaining consciousness, wakes up in his home. When he looks out the window, he sees that everything is different from the days he remembered. An extremely silent and empty day is strange, because the place where he lives is very busy, so he notices that the city is completely empty, with abandoned cars and deserted streets. That makes him scared. KNOCK KNOCK - there\'s someone knocking on your door. Do you want to open the door?\n', '', 104, 'Yes', 105, 'No'),
(104, 'You open the door and there is a strange person, very restless. You ask “what’s going on?” Soon after, when you least expect it, the person ends up attacking you and you fall to the ground and injure your leg. However, he manages to grab something to defend himself and knocks the attacker down, causing his death. After the event you go to the window and see a bunch of people coming towards your house. Terrified, you flee through the back of your house and head towards the city center.\r\n', '', 111, 'Next', 0, ''),
(105, 'You don\'t open the door and notice that the door has stopped slamming. So you decide to go to the window and see several people coming running and surrounding your house. and you see that they are there to harm you. Terrified, you quickly hide inside the garage, and those out of control people invade your house in search of finding you and killing you.\n', '', 106, 'Escape from the garage with your car', 108, 'Escape from the garage on foot'),
(106, 'You can\'t start the car, because the engine is broken, the noise of the car ends up catching people\'s attention and they go straight to the basement. they catch him and kill him.', '', 0, '', 0, ''),
(107, 'After the incident, you go to the hospital.', '', 113, 'Next', 0, ''),
(108, 'Okay, you can get away without people noticing. Where do you want to follow your journey:', '', 109, 'Forest', 111, 'City'),
(109, 'Maybe it wasn\'t a good choice, you don\'t have the resources to go through the forest.', '', 110, 'Next', 0, ''),
(110, 'Heading towards the forest, you remember your wife Caroline and go looking for her. Going to the forest, you fall into a trap and become unconscious. When you wake up, you end up being roasted on a fire by an unknown people, and you die.', '', 0, '', 0, ''),
(111, 'You continue through the city towards the city center, where you come across a convenience store and a hospital. Where do you want to go first?', '', 112, 'Convenience store: to look for useful supplies, such as: water, food, etc.', 113, 'Hospital: To check if there are any survivors and see if you can find some first aid kits'),
(112, 'Once there, you manage to find supplies, and find a knife. Leaving the store, you see a person heading towards the store. what to do?', '', 101, 'Try to kill her', 107, 'Exit through the back'),
(113, 'Arriving at the hospital, you find infected people wandering everywhere, so you decide to leave as quickly as possible, before you are seen. After running desperately, you find an abandoned house.', '', 114, 'Enter the house', 115, 'Keep running'),
(114, 'Entering the house, he finds a gun. As you search the house further, you find an arsenal right under the bed and you see that the place is not just a house, but the house of a hunter, who had all kinds of weapons. You can only choose 3 items. Choose wisely', '', 116, '1-Flamethrower; pistol and molotov cocktail', 117, '2- Rifle; ballistic vest and grenade'),
(115, 'You  trip and hurt yourself.', '', 123, 'heal', 124, 'Keep running even when hurt'),
(116, 'Okay, you\'re armed now. You leave the house and hear strange noises. There are people coming towards you. What do you want to do?', '', 119, 'Use the weapons you just acquired', 115, 'Run away, because there are many.'),
(117, 'Okay, you\'re armed now. You leave the house and hear strange noises. There are people coming towards you. What do you want to do?', '', 115, 'Run away, because there are many.', 118, 'Use the weapons you just acquired'),
(118, 'If you chose option 2 (You can\'t kill people and they end up killing you.', '', 0, '', 0, ''),
(119, 'If you chose option 1 (You can kill them with the flamethrower and the Molotov cocktail) both the spear and the cocktail are instantaneous chemical reactions.', '', 120, 'Next', 0, ''),
(120, 'After leaving the house, you go looking for a safe place, as you don\'t know what is happening. On the way, you find a beautiful tree. It was a tree called: European Oak, it has a smooth and almost shineless surface, it has an imperceptible smell and taste. You see a crowd of people. What do you want to do?', '', 121, 'Climb the tree', 122, 'Running out'),
(121, 'You climb the European Oak and people don\'t see you, but because the tree is smooth you end up slipping and falling in front of people, and they end up killing you.', '', 0, '', 0, ''),
(122, 'You run away, but you end up attracting attention and people end up chasing you. Running, you trip and hurt yourself, causing your death.', '', 0, '', 0, ''),
(123, 'You stop to heal, but the infected infect you and end up killing you.', '', 0, '', 0, ''),
(124, 'You can find a base where people can shelter you.', '', 125, 'Next', 0, ''),
(125, 'People heal you and give you somewhere to sleep. There were people from all social classes, such as nobility and peasants. Some of the people started to get strange, behaving like the person who attacked him in his home. Do you want to notify the base chief that there are people behaving strangely on the base?', '', 127, 'Yes', 126, 'No'),
(126, 'You didn\'t warn people and everyone on the base was suddenly attacked. Everyone on the base, including you, died.', '', 0, '', 0, ''),
(127, 'You notify Sebastião (head of the base), and he manages to intervene in an attack by those people. The head of the base does some tests on the people involved and discovers that it is a new disease, which they call the “Cryses” disease. Sebastião also discovers that infected people are vulnerable to fire. After discovering this information, you go out to kill these creatures. You arrive near a camp and are ambushed. Sebastião brought some Molotov cocktails. What would be the best thing to do?', '', 129, 'Stay and fight because you have some Molotov cocktails', 128, 'Escape with your friends to the base'),
(128, 'You exit through the back, but unfortunately you are captured and executed.', '', 0, '', 0, ''),
(129, 'You manage to kill everyone who attacked them using the Molotov cocktail.', '', 130, 'Next', 0, ''),
(130, 'After the event, you return to base to rest. When you go to sleep you remember Caroline, your wife and you start to get desperate because you don\'t know where she is. This desperation makes you hide from the base in search of her through the forest.', '', 131, 'Next', 0, ''),
(131, 'You go in search of Caroline and manage to find her in a cabin', '', 132, 'Take her to the base in search of a cure', 139, 'Kill her, because you\'re not sure if you can cure her'),
(132, 'You manage to talk to Caroline and get her to agree to go with you to the base in search of the cure. Arriving at the base, you hide her in your room for fear that Sebastião will find her and kill her.', '', 133, 'Next', 0, ''),
(133, 'And what you feared most happened: Sebastião finds Caroline under his bed, but to his surprise, Sebastião doesn\'t kill her, because he wants to use her as a guinea pig.', '', 134, 'Don\'t you let Sebastião do that?', 137, 'You agree for everyone\'s sake'),
(134, 'You remember that he already has people with Cryses as guinea pigs, he doesn\'t need Caroline to do tests. You get the impression that Sebastião wants to kill his wife, so you come up with a plan to escape the base. What would that plan be?', '', 135, 'Waiting to stay overnight to escape?', 136, 'If they pass by guards?'),
(135, 'At night, the guard is doubled. You are caught running away with Caroline and are killed because Sebastião thought you were plotting against him.', '', 0, '', 0, ''),
(136, 'You manage to go unnoticed and escape the base. After leaving the base, you notice something different, your wife set up an ambush for you and unfortunately you caught the joker.', '', 0, '', 0, ''),
(137, 'Sebastião begins the tests and discovers that they die with a silver bullet in the heart, yes he did this test with her. You\'re happy for a moment, until you realize how he figured it out?', '', 138, 'Next', 0, ''),
(138, 'You realize what happened and you attack Sebastião causing his death, this causes noise and the guards are alerted and end up killing you.', '', 0, '', 0, ''),
(139, 'She notices that you are behaving hostile and ends up attacking and hurting you. After hurting him, she runs away, fighting her own mind. You manage to get up, but you have the bad luck to encounter a Leopard. What to do in this situation?', '', 141, 'Run away, as he can attack you at any time', 140, 'Play macho, show that you are in charge'),
(140, 'Ele vai embora, mas por você estar ferido, você cai e acaba desmaiando. Infelizmente, o Leopardo volta e acaba o devorando.', '', 0, '', 0, ''),
(141, 'You ran, but it wasn\'t enough. It catches up with you and tears you apart.', '', 0, '', 0, ''),
(142, 'This was Ethan\'s dream, luckily he manages to wake up from the coma and the world is normal, until...', '', 143, 'Next', 0, ''),
(143, '10/27/2030     Ethan\'s survival - part 2.', '', 0, '', 0, '');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `historia`
--
ALTER TABLE `historia`
  ADD CONSTRAINT `fk_escolha1` FOREIGN KEY (`escolha1`) REFERENCES `historia` (`id_historia`),
  ADD CONSTRAINT `fk_escolha2` FOREIGN KEY (`escolha2`) REFERENCES `historia` (`id_historia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
