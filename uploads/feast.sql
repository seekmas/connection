-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 10 月 02 日 01:50
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `feast`
--

-- --------------------------------------------------------

--
-- 表的结构 `fe_follows`
--

CREATE TABLE IF NOT EXISTS `fe_follows` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) NOT NULL,
  `poid` bigint(20) NOT NULL,
  `follow_content` char(255) NOT NULL,
  `timecreated` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `fe_follows`
--

INSERT INTO `fe_follows` (`id`, `uid`, `poid`, `follow_content`, `timecreated`) VALUES
(1, 2, 50, 'I know you knw me', 1380647948),
(2, 2, 52, 'Cook my cool pad', 1380648044),
(3, 2, 52, 'SWU is what', 1380648098),
(4, 2, 52, 'Test some commit', 1380648371),
(5, 2, 52, '我擦 怎么这么丑', 1380649539);

-- --------------------------------------------------------

--
-- 表的结构 `fe_members`
--

CREATE TABLE IF NOT EXISTS `fe_members` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` char(255) NOT NULL,
  `username` char(255) NOT NULL,
  `password` char(255) NOT NULL,
  `salt` char(6) NOT NULL,
  `timecreated` int(10) NOT NULL,
  `lastlogin` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `fe_members`
--

INSERT INTO `fe_members` (`id`, `email`, `username`, `password`, `salt`, `timecreated`, `lastlogin`) VALUES
(1, 'seekmas@msn.cn', 'admin', '5700ed719c9cec76a8b3b187d3c1581b', 'd162ee', 1380262961, 1380629367),
(2, '446146366@qq.com', 'mot', '201bc24eeb6ac6b141a3de751db3a0d6', 'b476dd', 1380263043, 1380642210),
(3, '594137631@qq.com', '邪恶力量', 'd284e039a5d483d9eaa9d03eb781434f', '4ace14', 1380272673, 1380561108);

-- --------------------------------------------------------

--
-- 表的结构 `fe_members_profile`
--

CREATE TABLE IF NOT EXISTS `fe_members_profile` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Realname` char(255) NOT NULL,
  `Gender` tinyint(1) NOT NULL,
  `Birthday` char(5) NOT NULL,
  `InterestedIn` tinyint(1) NOT NULL,
  `RelationshipStatus` tinyint(1) NOT NULL,
  `Languages` mediumint(3) NOT NULL,
  `Education` mediumint(3) NOT NULL,
  `Wirein` char(1) NOT NULL,
  `Work` char(255) NOT NULL,
  `About` char(255) NOT NULL,
  `Nation` int(10) NOT NULL,
  `Hometowk` int(10) NOT NULL,
  `Location` int(10) NOT NULL,
  `Address` int(11) NOT NULL,
  `School` char(1) NOT NULL,
  `Company` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fe_members_status`
--

CREATE TABLE IF NOT EXISTS `fe_members_status` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `authstr` char(255) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `timecreated` int(10) NOT NULL,
  `timeexpired` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `fe_members_status`
--

INSERT INTO `fe_members_status` (`id`, `authstr`, `userid`, `timecreated`, `timeexpired`) VALUES
(1, '29eb4cafec2d345ff4b29afe1ce63b2b', 2, 1380265094, 1380351494),
(2, '4dd51174ea7f9e5a34dc19a0f7533cfe', 2, 1380265104, 1380351504),
(3, '58142a2b6f12244829123ca46ab420de', 1, 1380265825, 1380280225),
(4, 'f02861bcb59729efae17ded87c529e91', 1, 1380266263, 1380352663),
(5, 'f8dfd1f1512ac5bb40b37df60f15f4a6', 2, 1380268141, 1380354541),
(6, '35cab98281851329e7c82090eac126e3', 2, 1380268192, 1380354592),
(7, '009ff09774b71b39866a7ba855807e66', 1, 1380270508, 1380356908),
(8, '45ff85f9f4412383efa1ad64e84bf16a', 2, 1380270537, 1380356937),
(9, '47fd574a4ee2fb05adcb61535aad4e76', 1, 1380270742, 1380285142),
(10, 'e01df4420c55b69d35c0e08b56f19d3f', 2, 1380270871, 1380357271),
(11, 'e61827839b4e76d2ec5dae3f709a61d3', 3, 1380272687, 1380359087),
(12, '4e496798f0e5756f7ec750b32aad8282', 1, 1380375626, 1380390026),
(13, 'ede7cab43662732ae617943fa897644a', 2, 1380392172, 1380478572),
(14, '0301498c71dcf7e68b0ee95f12f98526', 2, 1380427395, 1380441795),
(15, 'b1cb810c981459f5b86bd038fa2b41c0', 3, 1380438547, 1380452947),
(16, 'c0bdd88df7e58abe39268c0ef445e630', 1, 1380440651, 1380455051),
(17, '4e2ef330973c27006155e2230b4db8fd', 2, 1380469187, 1380483587),
(18, 'f68c908abf45a38c433fc5755db7ffe2', 2, 1380512359, 1380598759),
(19, 'ba13809ecef02b066d19ba82e5ae9776', 2, 1380540327, 1380626727),
(20, '3747729dc535b3db250027153be745ec', 2, 1380550594, 1380564994),
(21, '51ba4a4aca6854ae45a18760da5efb30', 3, 1380561108, 1380575508),
(22, '38d6f6a4f60933211457574813192635', 2, 1380596308, 1380682708),
(23, '82acff4f8e5e1fe9ca319055218c6e32', 2, 1380626728, 1380641128),
(24, 'ee86b80be3f244db17e065771c79b6f0', 2, 1380627603, 1380714003),
(25, 'b3ad2836e06cb866c06e37585cbcb46d', 2, 1380628246, 1380714646),
(26, '680d219acd4278c6ec5bc1091f0828b2', 1, 1380629367, 1380643767),
(27, '496b8541943cc502cc73d9861eb6337c', 2, 1380630733, 1380645133),
(28, '817163fbbdb14de5ad3fd7c3b471713a', 2, 1380631582, 1380717982),
(29, 'b9f316d95340416c6c50a4d6bd713294', 2, 1380642210, 1380728610);

-- --------------------------------------------------------

--
-- 表的结构 `fe_objects`
--

CREATE TABLE IF NOT EXISTS `fe_objects` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `object_name` char(255) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `timecreated` int(10) NOT NULL,
  `times` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `fe_objects`
--

INSERT INTO `fe_objects` (`id`, `object_name`, `user_id`, `timecreated`, `times`) VALUES
(1, 'Panada', 1, 1380380598, 1),
(2, 'Obamacare', 1, 1380380610, 1),
(3, 'Torres', 1, 1380380621, 1),
(4, 'blessed', 1, 1380380728, 1),
(5, 'Starbucks', 1, 1380380752, 1),
(6, 'ipadgames', 1, 1380380762, 1),
(7, 'gameday', 1, 1380380767, 1),
(8, 'Tonight', 1, 1380380773, 1),
(9, 'タメ大歓迎', 1, 1380380784, 1),
(10, 'Ole', 1, 1380380796, 1),
(11, 'Miss', 1, 1380380798, 1),
(12, 'Notre', 1, 1380380801, 1),
(13, 'Dame', 1, 1380380802, 1),
(14, '秋といえ', 1, 1380380809, 1),
(15, 'tbs', 1, 1380380813, 1),
(16, '踊る大捜査線', 1, 1380380817, 1),
(17, 'あ行の後に殺されましたをつけるともう絶望', 1, 1380380823, 1),
(18, '感謝祭', 1, 1380380827, 1),
(19, '同じクラス', 1, 1380380832, 1),
(20, '一印象', 1, 1380380836, 1),
(21, 'うんw', 1, 1380380842, 1),
(22, 'アマゾン', 1, 1380380846, 1),
(23, 'Bootstrap', 2, 1380392183, 1),
(24, '张芸京', 1, 1380440735, 1),
(25, '东汉末年', 2, 1380476701, 1),
(26, 'GalaxyNoteIII', 2, 1380476717, 1),
(27, '曹操', 2, 1380476728, 1),
(28, '双鱼玉佩', 2, 1380476737, 1),
(29, '被偷走的那五年', 2, 1380476750, 1),
(30, '百年孤独', 2, 1380614563, 1);

-- --------------------------------------------------------

--
-- 表的结构 `fe_posts`
--

CREATE TABLE IF NOT EXISTS `fe_posts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) NOT NULL,
  `post_content` text NOT NULL,
  `object_id` bigint(20) NOT NULL,
  `timecreated` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- 转存表中的数据 `fe_posts`
--

INSERT INTO `fe_posts` (`id`, `uid`, `post_content`, `object_id`, `timecreated`) VALUES
(1, 2, '世界你好 这是订阅围脖', 0, 1380270737),
(2, 1, '我是管理员哇', 0, 1380270747),
(3, 1, 'the dust you are , the dust you finally to be .', 0, 1380270856),
(4, 3, '这个很好玩', 0, 1380272693),
(5, 3, 'Most users will never have any need to do this, but the option to replace or extend them does exist for those who would like to significantly alter the CodeIgniter core.', 0, 1380273358),
(6, 3, 'Messing with a core system class has a lot of implications, so make sure you know what you are doing before attempting it.', 0, 1380273364),
(7, 3, 'If all you need to do is add some functionality to an existing library - perhaps add a function or two - then it''s overkill to replace the entire library with your version. In this case it''s better to simply extend the class. Extending a class is nearly identical to replacing a class with a couple exceptions.', 0, 1380273377),
(8, 3, '在Bootstrap中，input、select和textarea默认被设置为100%宽度。为了使用内联表单，你需要专门为使用到的表单控件设置宽度。', 0, 1380273595),
(9, 1, 'Hands up guys', 0, 1380375637),
(10, 1, '*Bootstrap3relase* Bootstrap提供了几种可以帮你快速上手的方式，每种方式针对具有不同技能等级的开发者和不同的使用场景。继续阅读下面的内容，看看哪种方式适合你的需求吧。', 0, 1380378496),
(16, 1, 'I love *Panada* ---\r\n*Hello world* Hello world', 0, 1380384238),
(17, 1, '*mot*', 0, 1380440656),
(19, 2, 'Youknow what i am', 0, 1380471390),
(20, 2, '@mot', 0, 1380472507),
(21, 2, 'Nice to meet you ---\r\n@mot can you see that ?', 0, 1380472977),
(22, 2, 'Second zi to you ---\r\n@mot i call you second time\r\n&nbsp;', 0, 1380473250),
(23, 2, 'Bootstrap Tips ---\r\n为了给一组可折叠页面元素添加控制器，添加data-parent="#selector"即可。请参考下面给出的案例。 @michael', 0, 1380476130),
(12, 1, '&nbsp;&nbsp;&nbsp;当我们谈论爱情时我们在谈论什么---\r\n&nbsp;&nbsp;&nbsp;&nbsp; 2008年年初，我在选题会上说，现在互联网上活跃着一群翻译家，有字幕组，有翻译大学课程的项目，&ldquo;有一个家伙在上海，专门翻译卡佛的小说。&rdquo;那天会议上，我们确定做这样一个题目叫&ldquo;互联网翻译家&rdquo;。&nbsp;&nbsp;&nbsp; 我是在&ldquo;3rdcolour&rdquo;的博客上看到小二翻译的小说的，&ldquo;3rdcolour&rdquo;在兰州，他喜欢看卡佛的小说，但很难找到书，就建了个博客，叫&ldquo;寻找雷蒙德?卡佛&rdquo;。小二老早就开始翻译卡佛，也找到这个博客，他把自己翻译的作品给&ldquo;3rdcolour&rdquo;寄过去。很快，我就和小二敲定在上海见面。我们大概谈了有4个小时，然后呼朋唤友一起吃了顿晚饭。小二打篮球，喜欢合唱，是个高级管理人员加高级工程师，但自称是个焊电路的，这不是那种假装的谦卑，而是他打心眼里认为，挣钱做生意造福于别人服务于社会，这还不够，最好还要给&ldquo;文明&rdquo;做出一点儿贡献。&nbsp;&nbsp;&nbsp; 再后来，我采访陆建德老师，陆老师给我讲凯恩斯的一个小故事&mdash;&mdash;1945年，凯恩斯从《经济学杂志》主编一职卸任，顾问委员会为他举行宴会，他在致谢时来了个修辞上的反高潮。他要为皇家经济学会和经济学家干杯，并说在座诸位都是受托人（trusteesof&hellip;&hellip;），此时他略作停顿，大家以为他要说的是文明的受托人，不料他故意让众人失望：&ldquo;为经济学家、为并非创造文明之受托人，而是创作文明之可能性的受托人诸位，干杯。&rdquo;真正受托创造文明的，是凯恩斯的那帮朋友&mdash;&mdash;布鲁姆斯伯里团体里的那帮艺术家和作家。&nbsp;&nbsp;&nbsp; 咱们这里的经济学家不会有这样的看法，咱们这里的作家也担当不起这个。即便是看小说的人，也多数自甘于边缘和异类了，你要是一不小心成了文化消费的&ldquo;主流&rdquo;，那你得多差劲啊。所以，偷偷看点儿一般人不知道的小说，就我而言，是特别有优越感的一个事儿。&nbsp;&nbsp;&nbsp; 那次，在上海，麻省理工学院的亨利?詹金斯(HenryJenkins)先生也接受了我们的采访，他说，互联网上正兴起一种&ldquo;参与文化&rdquo;，推动这种文化形成的是&ldquo;粉丝&rdquo;，全世界的&ldquo;粉丝&rdquo;联合起来，共享信息，他还说，互联网可以兴起一种新型的&ldquo;世界主义&rdquo;，以往一个孩子要了解世界，就要到处去旅行，见识各地的文化，现在他可以通过互联网更加便捷的了解这个世界。嗯，这位先生说的多好啊。&nbsp;&nbsp;&nbsp; 2008年冬天，译林引进的卡佛小说集出版了，我问小二，怎么还不见他的译本有动静，他好像并不着急。自打上海的采访之后，我们没再见过，有什么事情都通过网络交流，比如豆瓣的&ldquo;卡佛小组&rdquo;。还是通过互联网，我看到一个读者对卡佛的评价&mdash;&mdash;&ldquo;卡佛如果是一个伟大的小说家，那么他必定也同样有这样属于他自己的不可复制的气质，这和他是不是一个LOSER，是不是一生穷困，是不是描述底层人民的生活没关系&hellip;&hellip;你要是硬要我说属于卡佛的独一无二的气息是什么，我也说不上来，也不想说，反正书里的一切都是这个叫做雷蒙德?卡佛的家伙的，那只老孔雀，那只恶心的耳朵，那只面包圈，软座车厢，这些都是他的，这个穷鬼的，这些平常的卑微的不起眼的琐碎日子，就这样成了永恒，而他拥有这一切，永远拥有。&rdquo;', 0, 1380381802),
(15, 1, '百年孤独 --- &nbsp;&nbsp;&nbsp; 大儿子霍&middot;网卡蒂奥满了十四岁，长着方方的脑袋和蓬松的头发，性情象他父亲一样执拗。他虽有父亲那样的体力，可能长得象父亲一般魁伟，但他显然缺乏父亲那样的想象力。他是在马孔多建村之前翻山越岭的艰难途程中诞生的。父母确信孩子没有任何牲畜的特征，都感谢上帝。奥雷连诺是在马孔多出生的第一个人，三月间该满六岁了。这孩子性情孤僻、沉默寡言。他在母亲肚子里就哭哭啼啼，是睁着眼睛出世的。人家给他割掉脐带的时候，他把脑袋扭来扭去，仿佛探察屋里的东西，并且好奇地瞅着周围的人，一点儿山不害怕。随后，对于走到跟前来瞧他的人，他就不感兴趣了，而把自己的注意力集中在棕搁叶铺盖的房顶上；在倾盆大雨下，房顶每分钟都有塌下的危险。乌苏娜记得后来还看见过孩子的这种紧张的神情。&nbsp;&nbsp;&nbsp; 有一天，三岁的小孩儿奥雷连诺走进厨房，她正巧把一锅煮沸的汤从炉灶拿到桌上。孩子犹豫不决地站在门槛边，惊惶地说：&ldquo;马上就要摔下啦。&rdquo;汤锅是稳稳地放在桌子中', 0, 1380382586),
(26, 2, 'Restful ---                                                                                                                                      ', 0, 1380513339),
(27, 2, '', 0, 1380513349),
(28, 2, '&lt;br&gt;            $content = &lt;br&gt;', 0, 1380514214),
(33, 2, 'Cool boys', 0, 1380560656),
(34, 2, 'Code you know ---Hello world ! I am z-po', 0, 1380560673),
(36, 3, 'Everything worth to share\\r\\n', 0, 1380562015),
(30, 2, 'Hello world&lt;br&gt;', 0, 1380514290),
(31, 2, '&lt;br&gt;&lt;br&gt;', 0, 1380514435),
(50, 2, '#被偷走的那五年#  记得七年之痒', 29, 1380642336),
(49, 2, '#秋といえ#当苹果停止创新,所有的手机厂商都不知道接下来该怎么干', 14, 1380633230),
(51, 2, '#iOS7# published in 9.15---Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante', 0, 1380644538),
(52, 2, '#Notre#University of Notre Dame-SWU', 12, 1380648033),
(47, 1, '@mot come to see it ? satisfied', 0, 1380629385);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
