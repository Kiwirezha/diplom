SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Структура таблицы `weapons`
--

CREATE TABLE `weapons` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `img_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Дамп данных таблицы `weapons`
--

INSERT INTO `weapons` (`id`, `name`, `type`, `description`, `img_path`) VALUES
(1, 're45', 'пистолет', 'Автопистолет RE-45, или просто RE-45 Auto или RE-45 - это опытный противопехотный полностью автоматический пистолет-пулемет, производимый Lastimosa Armory и Paradinha Arsenal, который появляется в Titanfall, Titanfall 2 и Apex Legends. Он служит надежным запасным оружием "побрызгай и помолись" для пилотов на близком расстоянии.', 'img/guns/RE45.png'),
(2, 'p2016', 'пистолет', 'Hammond P2016, или просто P2016, - это ручное оружие производства Lastimosa Armory, которое появляется в Titanfall 2. По сути, это модернизированный вариант Hammond P2011 от Titanfall. Как и его предшественник, P2016 представляет собой полуавтоматический пистолет с магазином на 12 патронов.', 'img/guns/P2016_Icon.png'),
(3, 'wingman', 'пистолет', 'B3 Wingman, или просто Ведомый, - это пилотное противопехотное револьверное оружие, которое появляется в Titanfall, Titanfall 2, Apex Legends и Apex Legends Mobile. В любом случае, Wingman может похвастаться огромной убойной силой крупного калибра и заметной точностью, что компенсирует его небольшой магазин и относительно низкую скорострельность.', 'img/guns/Wingman_Icon.png'),
(4, 'мозамбик', 'пистолет', 'SA-3 Mozambique Shotgun, или просто Мозамбик, - это экспериментальный противопехотный трехствольный пистолет-дробовик, который появляется в Titanfall 2 и Apex Legends. Как и B3 Wingman Elite, его можно использовать в качестве основного оружия, в отличие от всех других видов дополнительного оружия в игре.', 'img/guns/Mozambique_Icon.png'),
(5, 'smart pistol', 'пистолет', 'Smart Pistol - это опытный противопехотный полуавтоматический пистолет с самозарядным затвором производства Lastimosa Armory, который появился в Titanfall. Впоследствии в Titanfall 2 его сменил Smart Pistol MK6.', 'img/guns/SmartPistolMK5.png'),
(6, 'alternator', 'ПП', 'Пистолет-пулемет Alternator (SMG), или просто генератор переменного тока, в концепт-арте неканонически именуемый SP-14 Hatchet, представляет собой опытный противопехотный двуствольный пистолет-пулемет. Она дебютирует в Titanfall 2[1], а позже вернется в Apex Legends и ApexLegends Mobile.', 'img/guns/Alternator_Icon.png'),
(7, 'CAR', 'ПП', 'Пистолет-пулемет Combat Advanced Round (C.A.R. или CAR SMG) - это экспериментальный противопехотный полностью автоматический пистолет-пулемет, который появляется в Titanfall, Titanfall 2 и Apex Legends.', 'img/guns/CAR_Icon.png'),
(8, 'Prowler', 'ПП', 'Оружие индивидуальной защиты Prowler Burst (PDW), Prowler SMG или просто Prowler - это противопехотное крупнокалиберное оружие индивидуальной защиты, дебютировавшее в Apex Legends в качестве доступного оружия в играх Apex Games. Оружие с тяжелыми боеприпасами предназначено для стрельбы очередями по пять патронов из коробки.', 'img/guns/AL_Prowler_Burst_PDW.png'),
(9, 'r97', 'ПП', 'Компактный пистолет-пулемет R-97 (SMG), или просто R-97 SMG или R-977 - это опытный противопехотный пистолет-пулемет ближнего боя производства Lastimosa Armory, который появляется в Titanfall и снова появляется в Titanfall 2 в его варианте, R-97 CN (Colonial Navy).', 'img/guns/R97_Icon.png'),
(10, 'volt', 'ПП', 'Пистолет-пулемет Colt (SMG), или просто Volt, - это экспериментальный энергетический пистолет-пулемет, представленный в играх Titanfall 2 и ApexLegends. Это оружие стреляет концентрированными зарядами высокой энергии, которые называются "синими трассирующими пулями". Несмотря на то, что это делает оружие очень эффективным в бою на средних и ближних дистанциях, на дальних дистанциях эти синие трассеры могут очень легко выдать ваше местоположение. По умолчанию Volt оснащен глушителем, хотя это крепление не дает никаких преимуществ в игре. Вольт часто используется Сталкерами и Призраками.', 'img/guns/Volt_menu_icon_TF2.png'),
(11, 'g2a5', 'винтовка', 'Боевая винтовка G2 A5, или просто G2A5 или G2 G2 - это полуавтоматическая боевая винтовка, производимая оружейной лавкой Lastimosa. Она появляется в игре Titanfall 2.', 'img/guns/G2A5_Icon.png'),
(12, 'hemlok', 'винтовка', 'Винтовка M1A3 Hemlok Burst-fire (BF-R), также известная как штурмовая винтовка Hemlok Burst (AR) или просто Hemlok, является экспериментальной противопехотной штурмовой винтовкой, которая появляется в Titanfall, Titanfall 2 и Apex Legends.', 'img/guns/Hemlok_Icon.png'),
(13, 'r-201', 'винтовка', 'Штурмовая винтовка специального назначения R-201 (SOAR), также известная как карабин R-201 или просто R-201, представляет собой экспериментальную противопехотную полностью автоматическую штурмовую винтовку производства Lastimosa Armory, которая является преемницей карабина R-101C и предшественницей Карабин R-301. Он появляется в Titanfall 2.', 'img/guns/R201_Icon.png'),
(14, 'vk-47 flatline', 'винтовка', 'VK-47 Flatline, или просто Флэтлайн, - это противопехотная штурмовая винтовка буллпап, используемая бойцами в играх Apex, доступная в Apex Legends. Это оружие считается преемником своего предшественника в Frontier War, V-47 Flatline. По большей части он обладает теми же характеристиками, но у него больше нет отдачи только по горизонтали, что была у его предшественника, и он выдерживает как вертикальную, так и горизонтальную отдачу.', 'img/guns/Flatline_Icon.png'),
(15, 'eva-8', 'дробовик', 'Дробовик EVA-8, также известный как EVA-8, ЕВА или EVA-8 Auto, - это автоматический дробовик, который появляется в Titanfall, Titanfall 2, Titanfall Online, Apex Legends и Apex Legends Mobile.', 'img/guns/EVA-8_Icon.png'),
(16, 'mastiff', 'дробовик', 'Боевое ружье Mastiff образца 1901 и M1904 годов, или просто Mastiff, - это пилотное противопехотное полуавтоматическое ружье производства Lastimosa Armory, которое появляется в Titanfall 2 и Apex Legends. Он стреляет малоскоростными зажигательными патронами и заряжается из подствольного магазина.', 'img/guns/Mastiff_Icon.png'),
(17, 'devotion', 'пулемёт', 'X-55 Devotion - это LMG с энергетическим приводом, который дебютирует в Titanfall 2 и вернется как в Apex Legends, так и в ApexLegends Mobile.', 'img/guns/Devotion_Icon.png'),
(18, 'spitfire', 'пулемёт', 'Легкий пулемет Spitfire (LMG) - это пилотный противопехотный полностью автоматический легкий пулемет, который появляется в Titanfall, Titanfall 2 и Apex Legends.', 'img/guns/Spitfire_Icon.png'),
(19, 'l-star', 'пулемёт', 'Штурмовая винтовка Lastimosa Armory (L-STAR) - это экспериментальный противопехотный полностью автоматический ручной пулемет, ускоряющий частицы, производства Lastimosa Armory, который дебютировал в Titanfall 2.', 'img/guns/L-STAR_Icon.png'),
(20, 'Крабер', 'Снайперская винтовка', 'Снайперская винтовка Kraber-AP (Anti Personell) 57-го калибра, или просто Kraber-AP Sniper, Kraber .57-cal Sniper, или Крабер, - это экспериментальная тяжелая противопехотная снайперская винтовка с затвором, которая появляется в Titanfall, Titanfall 2 и Apex Legends. Он изготовлен оружейной лавкой Lastimosa Armory.', 'img/guns/Kraber_Icon.png'),
(21, 'Archer', 'Ракетная установка', 'Тяжелая ракета "Арчер", или просто "Арчер", - это противотитановая ракетная установка, изготовленная компанией Brockhaurd Manufacturing и появляющаяся в играх Titanfall и Titanfall 2.', 'img/guns/Archer_Icon.png'),
(22, 'EPG-1', 'гранатомёт', 'EPG-1 (Энергетическая самоходная граната), или просто EPG, - это усовершенствованный плазменный противопехотный гранатомет, появившийся в Titanfall 2. Он стреляет медленно движущимися синими плазменными гранатами с высоким уроном от брызг.', 'img/guns/MGL_Icon.png'),
(23, 'jg-97', 'противотитановое оружие', 'LG-97 "Тандерболт", или просто "Тандерболт", - это экспериментальное оружие против титанов, которое появляется в Titanfall 2.', 'img/guns/Thunderbolt_Icon.png');


-- --------------------------------------------------------

--

--
-- Индексы таблицы `weapons`
--
ALTER TABLE `weapons`
ADD PRIMARY KEY (`id`);



-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `username`, `password`, `type`) VALUES
(5, 'admin', 'nnBp5+5Dic0=', 'admin'),
(6, 'username', 'mFiBGRL0w1D61Xva9fPC4g==', 'user');

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--

-- AUTO_INCREMENT для таблицы `weapons`
--
ALTER TABLE `weapons`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;






CREATE TABLE `tb_data` (
  `id` int AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50),
  `comment` varchar(150),
  `date` varchar(50),
  `reply_id` int
);