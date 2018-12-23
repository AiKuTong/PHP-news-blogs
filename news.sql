-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 05 月 15 日 03:03
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `news`
--
CREATE DATABASE IF NOT EXISTS `news` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `news`;

-- --------------------------------------------------------

--
-- 表的结构 `acc`
--

CREATE TABLE IF NOT EXISTS `acc` (
  `accid` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `password` char(32) DEFAULT NULL,
  `phone` char(11) DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`accid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `acc`
--

INSERT INTO `acc` (`accid`, `name`, `password`, `phone`, `address`) VALUES
(1, '王大大', '698d51a19d8a121ce581499d7b701668', '15880888888', '背景'),
(2, '吴国兰', '6512bd43d9caa6e02c990b0a82652dca', '13533333333', '1');

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `password` char(32) DEFAULT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`adminid`, `name`, `password`) VALUES
(1, 'admin', '96e79218965eb72c92a549dd5a330112');

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `articleid` smallint(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) DEFAULT NULL,
  `content` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`articleid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`articleid`, `title`, `content`, `time`) VALUES
(1, '公积金付房租 需看市场调额度', '　近日，住建部网站上公布了《关于开展治理违规提取住房公积金工作的通知》，这份通知由住建部、财政部、人民银行和公安部联合发布。其主要内容，是优先支持提取住房公积金支付房租，并且防止提取公积金用于炒房。<br><br>　　对于大多数人来说，用公积金炒房还是个陌生的概念。房地产调控趋严之后，公积金炒房更是天方夜谭。但搜索相关媒体报道，会发现部分地区存在着公积金放水的现象。有些地方政府曾允许使用公积金购买&ldquo;第三套住房&rdquo;，还有一些头脑&ldquo;灵活&rdquo;的个人或中介，则想尽办法钻政策的空子，频繁离婚结婚，策划假结假离，以便提现公积金或获取公积金贷款。甚至有些人和机构以伪造证明材料、虚构住房消费行为等手段违规提取住房公积金，形成骗提套取住房公积金&ldquo;黑色产业链&rdquo;。这无疑变相增加着公积金的杠杆率，为炒房提供着资金支持。这样的行为，不仅严重违背&ldquo;房住不炒&rdquo;的原则，而且也完全背离了设置公积金的初衷，让公积金的互助保障功能严重削弱。<br><br>　　此次发布的通知，显然对以上现象做了针对性的遏制。比如支持购买首套和二套，比如对同一人多次变更婚姻关系购房、多人频繁买卖同一套住房、异地购房尤其是非户籍地非缴存地购房、非配偶或非直系亲属共同购房等申请提取住房公积金的，要严格审核住房消费行为和证明材料的真实性。与此同时，要求对违规提取住房公积金的缴存职工，住房公积金管理中心要记载其失信记录，并随个人账户一并转移；对已提取资金的，要责令限期全额退回，在一定期限内限制其住房公积金提取和贷款。对逾期仍不退回的，列为严重失信行为，并依法依规向相关管理部门报送失信信息，实施联合惩戒。机关、事业单位及国有企业缴存职工违规提取住房公积金情节严重的，要向其所在单位通报。<br><br>　　值得重视的一条是，通知再次对公积金缴纳比例的浮动区间做了强调。划定低限，是为了防止企业为了少花钱应付差事，保证资金池充裕，保证职工的公积金能够管用。划定高限，则是为了防止变相利用公积金让富者愈富，从而失去制度的公平性。<br><br>　　很显然，更加严格的审核与更加严厉的惩戒措施，将有助于防堵漏洞，让那些房产炒作者没有钻空子的机会。大量的职工和企业缴纳住房公积金，不是为了给炒房者增加便利，不是为了进一步加剧不公，而是为了让自己的正常的购房、租房获得帮助。从这个角度来看，这次对住房公积金政策的调整是完全合理的，也是必要的。<br><br>　　仔细研读这份通知，也会发现，住房公积金政策并非是只收不放，对于人们正常的住房需求，住房公积金也将给予更为有力的支持。比如在支付房租方面，就要求予以优先支持提取。提取额度也要根据当地房租水平合理确定并且调整。在目前鼓励租房、调控购房的大背景下，房屋租金的变化频率可能更快。这就需要各地的公积金管理机构对租房市场动态有着及时的了解，制定出额度调整的规章制度，最好能设计出额度调整的窗口，让人们使用起公积金来更加踏实。<br><br>　　应该可以看到，作为解决住房问题有力帮手，公积金正在不断调整自己，逐渐走在正确的方向上。今后肯定还会根据实际情况继续调整，比如应该在缴纳范围上予以扩大，这样才能让公积金实力更雄厚，惠及更多的人。', '2018-05-14 06:46:38'),
(2, '吃到无照外卖 平台亦应担责', '外卖存在的问题由来已久，此前曾有不少报道说某些脏乱差的小餐馆，只需给中介一点钱，就能顺利通过网络外卖平台的审核。在一些电商平台、信息中介平台上，还有商家推出&ldquo;入驻外卖代开代办&rdquo;服务，声称可以帮助无实体店、无营业执照的经营者办理入驻外卖平台事宜。<br><br>　　令人欣慰的是，市食药监局的最新通报显示，为落实相关规定，百度外卖、美团、饿了么三大外卖平台对北京地区入网餐饮店铺的经营资质开展了全面自查，即日起在网站建立违规餐饮店铺公示专栏，并对其证照的真实性、合法性做出公开承诺。同时公布的还有首批下线店铺名单。<br><br>　　据统计，《网络餐饮服务食品安全监督管理办法》实施以来，全市食药监管部门已发现并处置2万余条网络餐饮店违法线索。这样的数字既说明了相关部门的工作很给力，也说明了此前外卖服务平台存在问题的普遍性。想想看，那么多有问题的店铺每天做出了多少不安全的、不卫生的餐饮，又有多少人稀里糊涂给吃进了肚子里。<br><br>　　三大外卖订餐平台发布了&ldquo;严格审查&rdquo;的承诺，同时平台间打通&ldquo;黑名单&rdquo;，以杜绝违法店铺在一家外卖平台下线后，从另一家平台上线的情况，这对于广大&ldquo;吃货&rdquo;来说都是让人踏实的利好。<br><br>　　如今天气已经越来越热，一旦食品安全卫生的工作出现纰漏，更容易导致肠胃疾病甚至食物中毒。让不诚信、不规范经营的店铺纳入黑名单，让他们在餐饮行业混不下去，这是确保食品、餐饮安全不得不做的事情。<br><br>　　值得注意的是，从违规餐饮店铺公示专栏可以看到，在众多下架的问题餐厅中除了小餐馆，也不乏某些知名连锁品牌。打响一个牌子不容易，但是要把信誉毁掉却可能是分分钟的事情。所以，&ldquo;公示栏&rdquo;也是在提醒广大商家以诚信去擦亮自己的招牌，一旦牌子倒了，再后悔可就来不及了。<br><br>　　此外，有记者发现某连锁品牌的加盟店因&ldquo;无证经营&rdquo;被平台下线并予以公示，但线下门店正常经营&mdash;&mdash;这也是在提醒相关部门，&ldquo;黑名单&rdquo;除了平台之间要打通，线上和线下监管也应该&ldquo;打通&rdquo;。<br><br>　　外卖平台对入网餐饮店铺的经营资质开展自查，查出了不少无证经营的店铺，这既说明在监管部门敦促下的自查自纠很有效，也说明此前店铺入驻外卖平台的流程的确存在问题，审核环节存在明显漏洞。<br><br>　　根据国家食品药品监督管理总局发布的《网络餐饮服务食品安全监督管理办法》，平台提供者需要履行建立食品安全相关制度、设置专门的食品安全管理机构、配备专职食品安全管理人员、审查登记并公示入网餐饮服务提供者的许可信息。我们期待，除了定期自查堵漏儿，平台更要按照这个办法的规定建立好相关制度，直接从源头抓好管控，别再让资质有问题的店铺混进自己的队伍里。<br><br>　　要敦促平台做好这方面的工作，除了监管部门定期审查他们是否做到了管理办法要求其履行的责任，也不妨通过简易程序支持利益受损的消费者向不法店铺索赔，同时要求平台承担连带的赔偿责任。这样的话，就可以给网络订餐平台更大的动力，倒逼他们执行好《网络餐饮服务食品安全监督管理办法》。', '2018-05-15 03:01:05');

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `messageid` smallint(6) NOT NULL AUTO_INCREMENT,
  `content` text,
  `articleid` smallint(6) DEFAULT NULL,
  `accid` smallint(6) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`messageid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`messageid`, `content`, `articleid`, `accid`, `time`) VALUES
(1, '哈哈', 1, 1, '2018-05-14 06:47:45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
