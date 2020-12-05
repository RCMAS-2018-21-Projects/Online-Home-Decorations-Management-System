-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 05, 2020 at 04:48 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `aurora1`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `addproduct`
-- 

CREATE TABLE `addproduct` (
  `pid` int(55) NOT NULL,
  `category` varchar(55) NOT NULL,
  `subcategory` varchar(55) NOT NULL,
  `pname` varchar(55) NOT NULL,
  `quantity` varchar(55) NOT NULL,
  `price` varchar(55) NOT NULL,
  `des` varchar(200) NOT NULL,
  `pimage` varchar(250) NOT NULL,
  PRIMARY KEY  (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `addproduct`
-- 

INSERT INTO `addproduct` VALUES (4, 'Lightings', 'Lamps', 'Table lamp', '10', '840', 'A table lamp is a small electric lamp which stands on a', '../uploads/11.jpg');
INSERT INTO `addproduct` VALUES (2, 'Living Room', 'Table', 'Coffee Table', '14', '16668', 'Wood solid coffee table.', '../uploads/4.jpg');
INSERT INTO `addproduct` VALUES (1, 'Kichen', 'Kitchenware', 'Turner', '7', '586.8', 'It is heat-resistant and easily flexible.', '../uploads/7.jpg');
INSERT INTO `addproduct` VALUES (9, 'Bed Room', 'Paintings', 'The Fir Forest'' Handmade Oil Painting', '12', '2820', 'Frame - Museum Quality Engraved Wooden Frame\r\n\r\nCanvas Size - 121.92 * 60.96\r\n\r\nOuter Size - 137.16* 76.2 (CM)', '../uploads/DSC_3367_7c0536d7-bf99-4cef-bd09-258c610d4916@2x.jpg');
INSERT INTO `addproduct` VALUES (6, 'Living Room', 'Lamps', 'Scandinavian Desk Lamp - Pink', '20', '4080', 'Overall (with shade) - Diameter: 19 Height: 56 (cms)\r\n\r', '../uploads/l3.jpg');
INSERT INTO `addproduct` VALUES (7, 'Lightings', 'Lamps', 'arminore', '43', '1200', 'beautiful lamp', '../uploads/l1.jpg');
INSERT INTO `addproduct` VALUES (8, 'Bed Room', 'Paintings', 'wild run-handmade oil painting', '9', '4080', 'Frame - Museum-quality engineered wood frame\r\n\r\nCanvas Size - 121.9 * 91.4\r\n\r\nOuter Size - 139.7 * 109.2 (cms)', '../uploads/w2.jpg');
INSERT INTO `addproduct` VALUES (10, 'Bed Room', 'Paintings', 'To me, Flowers are happiness'' Handmade Oil Painting', '23', '5472', 'Frame - Museum-quality engineered wood frame\r\n\r\nCanvas Size - 60.96* 91.44\r\n\r\nOuter Size - 78.74* 109.22', '../uploads/DSC_3092_f84199c1-dcdd-42a9-9214-4fb42df20ef8@2x.jpg');
INSERT INTO `addproduct` VALUES (11, 'Bed Room', 'Paintings', 'Spring makes my heart sing'' Handmade Oil Painting', '2', '27600', 'Frame - Museum-quality engineered wood frame\r\n\r\nCanvas Size - 60.96 * 91.44\r\n\r\nOuter Size - 78.74 * 109.22 (CM)', '../uploads/DSC_3467@2x.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `category`
-- 

CREATE TABLE `category` (
  `cid` int(24) NOT NULL auto_increment,
  `cname` varchar(55) NOT NULL,
  `desc` varchar(55) NOT NULL,
  PRIMARY KEY  (`cid`),
  UNIQUE KEY `cname` (`cname`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `category`
-- 

INSERT INTO `category` VALUES (5, 'Living  Room', 'Living Room');
INSERT INTO `category` VALUES (1, 'Kichen', 'Kitchen is a room used for preparing food.');
INSERT INTO `category` VALUES (4, 'Lightings', 'Attractive lights');
INSERT INTO `category` VALUES (6, 'Bed Room', 'Bed Room');

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `type` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` VALUES ('admin@gmail.com', 'admin123', 'admin', '');
INSERT INTO `login` VALUES ('rohan@gmail.com', 'Rohan@12345', 'user', '0');
INSERT INTO `login` VALUES ('mathew@gmail.com', 'Mathew@12345', 'user', '0');
INSERT INTO `login` VALUES ('minu@gmail.com', 'Minu@12345', 'staff', '0');
INSERT INTO `login` VALUES ('anika@gmail.com', 'Anika@12345', 'staff', '0');
INSERT INTO `login` VALUES ('meera@gmail.com', 'Meera@12345', 'user', '0');
INSERT INTO `login` VALUES ('justin@gmail.com', 'Justin@12345', 'staff', '0');
INSERT INTO `login` VALUES ('reenu@gmail.com', 'Reenu@12345', 'user', '0');
INSERT INTO `login` VALUES ('adithya@gmail.com', 'Adi@12345', 'staff', '0');
INSERT INTO `login` VALUES ('chinnu@gmail.com', 'Chinnu@12345', 'user', '0');

-- --------------------------------------------------------

-- 
-- Table structure for table `staffreg`
-- 

CREATE TABLE `staffreg` (
  `sid` int(25) NOT NULL auto_increment,
  `name` varchar(55) NOT NULL,
  `dob` varchar(55) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `hname` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `state` varchar(55) NOT NULL,
  `pincode` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `staff_doj` date NOT NULL,
  PRIMARY KEY  (`sid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `staffreg`
-- 

INSERT INTO `staffreg` VALUES (5, 'Anika', '1999-02-24', '9678764534', 'Puthiyakulangara', 'Thodupuzha', 'Kerala', '685588', 'anika@gmail.com', '2020-11-24');
INSERT INTO `staffreg` VALUES (6, 'Justin', '1999-02-24', '9867457687', 'Maliyekal', 'Kottayam', 'Kerala', '685566', 'justin@gmail.com', '2020-11-29');
INSERT INTO `staffreg` VALUES (7, 'adithya rajesh', '1999-11-25', '9876564565', 'koottungal', 'kalady', 'Kerala', '683575', 'adithya@gmail.com', '2020-11-29');

-- --------------------------------------------------------

-- 
-- Table structure for table `subcategory`
-- 

CREATE TABLE `subcategory` (
  `sid` int(25) NOT NULL auto_increment,
  `category` varchar(55) NOT NULL,
  `sub_category` varchar(55) NOT NULL,
  `des` varchar(55) NOT NULL,
  PRIMARY KEY  (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `subcategory`
-- 

INSERT INTO `subcategory` VALUES (4, 'Lightings', 'Lamps', 'A lamp is a device that makes light and heat.');
INSERT INTO `subcategory` VALUES (2, 'Living Room', 'Table', 'A table is an item of furniture.');
INSERT INTO `subcategory` VALUES (1, 'Kichen', 'Kitchenware', 'Kitchenware are tools used to prepare food.');
INSERT INTO `subcategory` VALUES (5, 'Bed Room', 'Paintings', 'paintings to decorate a room');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_cardpay`
-- 

CREATE TABLE `tbl_cardpay` (
  `cardid` int(24) NOT NULL auto_increment,
  `email` varchar(50) default NULL,
  `cname` varchar(30) default NULL,
  `card_no` int(16) default NULL,
  `exp_m` varchar(30) default NULL,
  `exp_y` int(4) default NULL,
  PRIMARY KEY  (`cardid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tbl_cardpay`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_cart`
-- 

CREATE TABLE `tbl_cart` (
  `cart_id` int(50) NOT NULL auto_increment,
  `buyer` varchar(50) NOT NULL,
  `p_id` int(50) NOT NULL,
  `prdt_name` varchar(50) NOT NULL,
  `staff_id` int(50) NOT NULL,
  `num` varchar(50) NOT NULL,
  `t_amnt` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `pay_status` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  PRIMARY KEY  (`cart_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=135 ;

-- 
-- Dumping data for table `tbl_cart`
-- 

INSERT INTO `tbl_cart` VALUES (97, '', 2, 'Coffee Table', 0, '1', '16668', '../uploads/4.jpg', 'null', '0000-00-00');
INSERT INTO `tbl_cart` VALUES (96, '', 2, 'Coffee Table', 0, '0', '0', '../uploads/4.jpg', 'null', '0000-00-00');
INSERT INTO `tbl_cart` VALUES (98, '', 2, 'Coffee Table', 0, '1', '16668', '../uploads/4.jpg', 'null', '0000-00-00');
INSERT INTO `tbl_cart` VALUES (126, 'admin@gmail.com', 7, 'arminore', 0, '2', '2400', '../uploads/l1.jpg', 'null', '0000-00-00');
INSERT INTO `tbl_cart` VALUES (127, 'admin@gmail.com', 6, 'Scandinavian Desk Lamp - Pink', 0, '1', '4080', '../uploads/l3.jpg', 'null', '0000-00-00');
INSERT INTO `tbl_cart` VALUES (128, 'admin@gmail.com', 8, 'wild run-handmade oil painting', 0, '1', '4080', '../uploads/w2.jpg', 'null', '0000-00-00');
INSERT INTO `tbl_cart` VALUES (129, 'admin@gmail.com', 8, 'wild run-handmade oil painting', 0, '1', '4080', '../uploads/w2.jpg', 'null', '0000-00-00');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_cart1`
-- 

CREATE TABLE `tbl_cart1` (
  `cart_id` int(11) NOT NULL auto_increment,
  `buyer` varchar(50) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `brand` varchar(50) default NULL,
  `num` int(11) NOT NULL,
  `t_amnt` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `pay_status` varchar(50) NOT NULL,
  `o_date` date default NULL,
  `place` varchar(50) NOT NULL,
  `del_status` varchar(50) NOT NULL,
  `ddate` date default NULL,
  PRIMARY KEY  (`cart_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

-- 
-- Dumping data for table `tbl_cart1`
-- 

INSERT INTO `tbl_cart1` VALUES (8, 'rohan@gmail.com', 2, 'Coffee Table', '', 1, 16668, '../uploads/4.jpg', 'null', '2020-11-29', '', 'Processing', NULL);
INSERT INTO `tbl_cart1` VALUES (9, 'meera@gmail.com', 2, 'Coffee Table', '', 1, 16668, '../uploads/4.jpg', 'null', '2020-11-29', '', 'Processing', NULL);
INSERT INTO `tbl_cart1` VALUES (10, 'reenu@gmail.com', 1, 'Turner', '', 1, 587, '../uploads/7.jpg', 'null', '2020-11-29', '', 'Processing', NULL);
INSERT INTO `tbl_cart1` VALUES (11, 'reenu@gmail.com', 2, 'Coffee Table', '', 1, 16668, '../uploads/4.jpg', 'null', '2020-11-29', '', 'Processing', NULL);
INSERT INTO `tbl_cart1` VALUES (12, 'chinnu@gmail.com', 2, 'Coffee Table', '', 3, 50004, '../uploads/4.jpg', 'null', '2020-11-29', '', 'Processing', NULL);
INSERT INTO `tbl_cart1` VALUES (13, 'chinnu@gmail.com', 1, 'Turner', '', 1, 587, '../uploads/7.jpg', 'null', '2020-11-29', '', 'Processing', NULL);
INSERT INTO `tbl_cart1` VALUES (14, 'admin@gmail.com', 7, 'arminore', '', 2, 2400, '../uploads/l1.jpg', 'null', '2020-11-29', '', 'Processing', NULL);
INSERT INTO `tbl_cart1` VALUES (15, 'admin@gmail.com', 6, 'Scandinavian Desk Lamp - Pink', '', 1, 4080, '../uploads/l3.jpg', 'null', '2020-11-30', '', 'Processing', NULL);
INSERT INTO `tbl_cart1` VALUES (16, 'admin@gmail.com', 8, 'wild run-handmade oil painting', '', 1, 4080, '../uploads/w2.jpg', 'null', '2020-11-30', '', 'Processing', NULL);
INSERT INTO `tbl_cart1` VALUES (17, 'admin@gmail.com', 8, 'wild run-handmade oil painting', '', 1, 4080, '../uploads/w2.jpg', 'null', '2020-11-30', '', 'Processing', NULL);
INSERT INTO `tbl_cart1` VALUES (18, 'chinnu@gmail.com', 7, 'arminore', '', 1, 1200, '../uploads/l1.jpg', 'null', '2020-11-30', '', 'Processing', NULL);
INSERT INTO `tbl_cart1` VALUES (19, 'chinnu@gmail.com', 8, 'wild run-handmade oil painting', '', 1, 4080, '../uploads/w2.jpg', 'null', '2020-11-30', '', 'Processing', NULL);
INSERT INTO `tbl_cart1` VALUES (20, 'chinnu@gmail.com', 8, 'wild run-handmade oil painting', '', 1, 4080, '../uploads/w2.jpg', 'null', '2020-11-30', '', 'Processing', NULL);
INSERT INTO `tbl_cart1` VALUES (21, 'chinnu@gmail.com', 8, 'wild run-handmade oil painting', '', 1, 4080, '../uploads/w2.jpg', 'null', '2020-11-30', '', 'Processing', NULL);
INSERT INTO `tbl_cart1` VALUES (22, 'chinnu@gmail.com', 7, 'arminore', '', 1, 1200, '../uploads/l1.jpg', 'null', '2020-11-30', '', 'Processing', NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_orderchild`
-- 

CREATE TABLE `tbl_orderchild` (
  `oc_id` int(24) NOT NULL auto_increment,
  `om_id` int(24) NOT NULL,
  `pid` int(24) NOT NULL,
  `pname` varchar(50) default NULL,
  `pqnty` varchar(30) default NULL,
  `pprice` varchar(30) default NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY  (`oc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

-- 
-- Dumping data for table `tbl_orderchild`
-- 

INSERT INTO `tbl_orderchild` VALUES (11, 7, 2, 'Coffee Table', '1', '16668', '../uploads/4.jpg');
INSERT INTO `tbl_orderchild` VALUES (10, 6, 1, 'Turner', '1', '586.8', '../uploads/7.jpg');
INSERT INTO `tbl_orderchild` VALUES (9, 5, 2, 'Coffee Table', '1', '16668', '../uploads/4.jpg');
INSERT INTO `tbl_orderchild` VALUES (7, 3, 1, 'Turner', '1', '586.8', '../uploads/7.jpg');
INSERT INTO `tbl_orderchild` VALUES (8, 4, 2, 'Coffee Table', '1', '16668', '../uploads/4.jpg');
INSERT INTO `tbl_orderchild` VALUES (12, 8, 7, 'arminore', '1', '1200', '../uploads/l1.jpg');
INSERT INTO `tbl_orderchild` VALUES (13, 8, 1, 'Turner', '1', '586.8', '../uploads/7.jpg');
INSERT INTO `tbl_orderchild` VALUES (14, 8, 8, 'wild run-handmade oil painting', '1', '4080', '../uploads/w2.jpg');
INSERT INTO `tbl_orderchild` VALUES (15, 9, 8, 'wild run-handmade oil painting', '1', '4080', '../uploads/w2.jpg');
INSERT INTO `tbl_orderchild` VALUES (16, 10, 7, 'arminore', '1', '1200', '../uploads/l1.jpg');
INSERT INTO `tbl_orderchild` VALUES (17, 10, 8, 'wild run-handmade oil painting', '1', '4080', '../uploads/w2.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_ordermaster`
-- 

CREATE TABLE `tbl_ordermaster` (
  `om_id` int(24) NOT NULL auto_increment,
  `cust_id` varchar(50) NOT NULL,
  `o_date` date default NULL,
  `tamt` varchar(30) NOT NULL,
  `del_status` varchar(30) default NULL,
  `del_date` date default NULL,
  `o_status` varchar(30) default NULL,
  PRIMARY KEY  (`om_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `tbl_ordermaster`
-- 

INSERT INTO `tbl_ordermaster` VALUES (7, 'reenu@gmail.com', '2020-11-29', '16668 ', 'Delivered', '2020-11-29', 'placed');
INSERT INTO `tbl_ordermaster` VALUES (6, 'reenu@gmail.com', '2020-11-29', '586.8 ', 'Processing', '2020-12-09', 'placed');
INSERT INTO `tbl_ordermaster` VALUES (4, 'rohan@gmail.com', '2020-11-29', '16668 ', 'Packed', '2020-11-30', 'placed');
INSERT INTO `tbl_ordermaster` VALUES (5, 'meera@gmail.com', '2020-11-29', '16668 ', 'Processing', '2020-12-09', 'placed');
INSERT INTO `tbl_ordermaster` VALUES (8, 'chinnu@gmail.com', '2020-11-30', '5866.8 ', 'Dispatched', '0000-00-00', 'placed');
INSERT INTO `tbl_ordermaster` VALUES (9, 'chinnu@gmail.com', '2020-11-30', '4080 ', 'Delivered', '0000-00-00', 'placed');
INSERT INTO `tbl_ordermaster` VALUES (10, 'chinnu@gmail.com', '2020-11-30', '5280 ', 'Processing', '2020-12-10', 'placed');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_payment`
-- 

CREATE TABLE `tbl_payment` (
  `pay_id` int(24) NOT NULL auto_increment,
  `order_id` int(24) NOT NULL,
  `card_id` int(24) NOT NULL,
  `paydate` date default NULL,
  `tamnt` varchar(30) default NULL,
  PRIMARY KEY  (`pay_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `tbl_payment`
-- 

INSERT INTO `tbl_payment` VALUES (1, 1, 1, '2020-11-29', '33336 ');
INSERT INTO `tbl_payment` VALUES (2, 1, 1, '2020-11-29', '51177.6 ');
INSERT INTO `tbl_payment` VALUES (3, 1, 0, '2020-11-29', '17841.6 ');
INSERT INTO `tbl_payment` VALUES (4, 2, 0, '2020-11-29', '16668 ');
INSERT INTO `tbl_payment` VALUES (5, 3, 0, '2020-11-29', '586.8 ');
INSERT INTO `tbl_payment` VALUES (6, 4, 0, '2020-11-29', '16668 ');
INSERT INTO `tbl_payment` VALUES (7, 5, 0, '2020-11-29', '16668 ');
INSERT INTO `tbl_payment` VALUES (8, 6, 0, '2020-11-29', '586.8 ');
INSERT INTO `tbl_payment` VALUES (9, 7, 0, '2020-11-29', '16668 ');
INSERT INTO `tbl_payment` VALUES (10, 8, 0, '2020-11-30', '5866.8 ');
INSERT INTO `tbl_payment` VALUES (11, 9, 0, '2020-11-30', '4080 ');
INSERT INTO `tbl_payment` VALUES (12, 10, 0, '2020-11-30', '5280 ');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_purchasechild`
-- 

CREATE TABLE `tbl_purchasechild` (
  `cpid` int(24) NOT NULL auto_increment,
  `mpid` int(24) default NULL,
  `product_id` int(24) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `vid` int(24) default NULL,
  `pdate` date default NULL,
  `tamnt` varchar(30) default NULL,
  PRIMARY KEY  (`cpid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `tbl_purchasechild`
-- 

INSERT INTO `tbl_purchasechild` VALUES (4, 0, 2, 'Coffee Table', '20', '13890', 2, '2020-11-24', '138900');
INSERT INTO `tbl_purchasechild` VALUES (3, 0, 1, 'Turner', '10', '489', 2, '2020-11-24', '4890');
INSERT INTO `tbl_purchasechild` VALUES (5, 0, 4, 'Table lamp', '10', '700', 2, '2020-11-29', '7000');
INSERT INTO `tbl_purchasechild` VALUES (6, 0, 5, 'Charade'' Blue & White Porcelai', '20', '13000', 2, '2020-11-29', '234000');
INSERT INTO `tbl_purchasechild` VALUES (7, 0, 6, 'Scandinavian Desk Lamp - Pink', '20', '3400', 2, '2020-11-29', '60000');
INSERT INTO `tbl_purchasechild` VALUES (8, 0, 7, 'arminore', '45', '1000', 2, '2020-11-29', '44000');
INSERT INTO `tbl_purchasechild` VALUES (9, 0, 8, 'wild run-handmade oil painting', '12', '3400', 2, '2020-11-30', '34000');
INSERT INTO `tbl_purchasechild` VALUES (10, 0, 9, 'The Fir Forest'' Handmade Oil P', '12', '2350', 2, '2020-11-30', '20000');
INSERT INTO `tbl_purchasechild` VALUES (11, 0, 10, 'To me, Flowers are happiness'' ', '23', '4560', 2, '2020-11-30', '40000');
INSERT INTO `tbl_purchasechild` VALUES (12, 0, 11, 'Spring makes my heart sing'' Ha', '2', '23000', 1, '2020-11-30', '40000');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_purchasemaster`
-- 

CREATE TABLE `tbl_purchasemaster` (
  `mpid` int(24) NOT NULL auto_increment,
  `vid` int(24) default NULL,
  `pdate` date NOT NULL,
  `tamnt` varchar(30) default NULL,
  `email` varchar(50) default NULL,
  PRIMARY KEY  (`mpid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tbl_purchasemaster`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `userreg`
-- 

CREATE TABLE `userreg` (
  `id` int(25) NOT NULL auto_increment,
  `name` varchar(55) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `hname` varchar(155) NOT NULL,
  `city` varchar(55) NOT NULL,
  `state` varchar(55) NOT NULL,
  `pincode` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `j_date` date NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- 
-- Dumping data for table `userreg`
-- 

INSERT INTO `userreg` VALUES (12, 'Rohan', '9567834565', 'Kayathinkara', 'Eranakulam', 'Kerala', '694433', 'rohan@gmail.com', '2020-11-24');
INSERT INTO `userreg` VALUES (13, 'Meera', '9876567865', 'Kadalikatil', 'Eranakulam', 'Kerala', '684466', 'meera@gmail.com', '2020-11-29');
INSERT INTO `userreg` VALUES (14, 'Reenu', '9867543456', 'Thakidiyel', 'Eranakulam', 'Kerala', '695544', 'reenu@gmail.com', '2020-11-29');
INSERT INTO `userreg` VALUES (15, 'chinnu maria', '9876543235', 'thenoor', 'vazhuthala', 'Kerala', '683562', 'chinnu@gmail.com', '2020-11-29');

-- --------------------------------------------------------

-- 
-- Table structure for table `vendorreg`
-- 

CREATE TABLE `vendorreg` (
  `vid` int(25) NOT NULL auto_increment,
  `vname` varchar(55) NOT NULL,
  `vphone` varchar(55) NOT NULL,
  `vstreet` varchar(55) NOT NULL,
  `vcity` varchar(55) NOT NULL,
  `vdistrict` varchar(55) NOT NULL,
  `state` varchar(55) NOT NULL,
  `pincode` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `staff_id` varchar(30) NOT NULL,
  PRIMARY KEY  (`vid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `vendorreg`
-- 

INSERT INTO `vendorreg` VALUES (2, 'Elsa', '9823674587', 'Moolamattom', 'Thodupuzha', 'Idukki', '', '685588', 'elsa@gmail.com', '');
INSERT INTO `vendorreg` VALUES (1, 'Arun', '9834572378', 'Kakkanad', 'Kochi', 'Eranakulam', '', '683355', 'arun@gmail.com', '');
