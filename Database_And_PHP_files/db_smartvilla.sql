-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 04:42 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smartvilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_login`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate_details`
--

CREATE TABLE IF NOT EXISTS `tbl_candidate_details` (
  `candidate_id` int(11) NOT NULL,
  `candidate_society_mem_id` int(11) NOT NULL,
  `mem_full_name` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `mem_type` varchar(20) NOT NULL,
  `id_proof` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Block',
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `tbl_clubhouse_facilities`
--

CREATE TABLE IF NOT EXISTS `tbl_clubhouse_facilities` (
  `clubhouse_facility_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `validity` varchar(20) NOT NULL DEFAULT '1 month',
  `amount` float NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clubhouse_member`
--

CREATE TABLE IF NOT EXISTS `tbl_clubhouse_member` (
  `c_member_id` int(11) NOT NULL,
  `s_member_id` int(11) NOT NULL,
  `clubhouse_facilities_name` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clubhouse_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_clubhouse_payment` (
  `clubhouse_payment_id` int(11) NOT NULL,
  `s_member_id` int(11) NOT NULL,
  `c_amount` float NOT NULL,
  `payment_date` varchar(30) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint_box`
--

CREATE TABLE IF NOT EXISTS `tbl_complaint_box` (
  `complaint_id` int(11) NOT NULL,
  `s_member_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'unread',
  `action` varchar(10) NOT NULL DEFAULT 'pending',
  `privacy_type` varchar(10) NOT NULL DEFAULT 'public',
  `response` text NOT NULL,
  `response_date` varchar(20) NOT NULL,
  `response_sts` varchar(10) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_facility_booking_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_facility_booking_payment` (
  `f_booking_payment_id` int(11) NOT NULL,
  `s_member_id` int(11) NOT NULL,
  `facility_name` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `facility_amount` varchar(30) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_family_member`
--

CREATE TABLE IF NOT EXISTS `tbl_family_member` (
  `family_mem_id` int(20) NOT NULL,
  `main_mem_email` varchar(30) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `flat_no` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_proof` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `meid` varchar(50) NOT NULL,
  `profile` varchar(1000) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fcm_user`
--

CREATE TABLE IF NOT EXISTS `tbl_fcm_user` (
  `fcm_user_id` int(11) NOT NULL,
  `meid` varchar(100) NOT NULL,
  `token` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_household_services`
--

CREATE TABLE IF NOT EXISTS `tbl_household_services` (
  `h_services_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maintenance_amount_record`
--

CREATE TABLE IF NOT EXISTS `tbl_maintenance_amount_record` (
  `m_amount_id` int(11) NOT NULL,
  `maintenance_amount` float NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maintenance_status_penalty`
--

CREATE TABLE IF NOT EXISTS `tbl_maintenance_status_penalty` (
  `m_s_p_id` int(20) NOT NULL,
  `s_member_id` int(20) NOT NULL,
  `m_amount` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `m_payment_status` varchar(20) NOT NULL DEFAULT 'pending',
  `penalty` varchar(20) NOT NULL DEFAULT '0',
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `tbl_noticeboard`
--

CREATE TABLE IF NOT EXISTS `tbl_noticeboard` (
  `n_id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `notice` varchar(80) NOT NULL,
  `date` varchar(20) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_noticeboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE IF NOT EXISTS `tbl_notification` (
  `notification_id` int(11) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_professional_corner`
--

CREATE TABLE IF NOT EXISTS `tbl_professional_corner` (
  `p_corner_id` int(11) NOT NULL,
  `s_member_id` int(11) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Block',
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_society`
--

CREATE TABLE IF NOT EXISTS `tbl_society` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_contact` varchar(30) NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `no_of_flats` int(11) NOT NULL,
  `no_of_members` int(11) NOT NULL,
  `area` float NOT NULL,
  `far_from_bus_station` float NOT NULL,
  `far_from_railway_station` float NOT NULL,
  `s_location` varchar(250) NOT NULL,
  `nearest_hospital` varchar(250) NOT NULL,
  `nearest_school` varchar(250) NOT NULL,
  `nearest_college` varchar(250) NOT NULL,
  `nearest_bank` varchar(250) NOT NULL,
  `nearest_atm` varchar(250) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_society_facility`
--

CREATE TABLE IF NOT EXISTS `tbl_society_facility` (
  `s_facility_id` int(10) NOT NULL,
  `facility_name` varchar(20) NOT NULL,
  `facility_amount` varchar(20) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `tbl_society_facility_booking`
--

CREATE TABLE IF NOT EXISTS `tbl_society_facility_booking` (
  `s_facility_booking_id` int(11) NOT NULL,
  `s_member_id` int(11) NOT NULL,
  `facility_name` varchar(20) NOT NULL,
  `booking_date` varchar(20) NOT NULL,
  `amount` float NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `tbl_society_flats`
--

CREATE TABLE IF NOT EXISTS `tbl_society_flats` (
  `s_flat_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `flat_ownership` varchar(20) NOT NULL,
  `flat_type` varchar(50) NOT NULL,
  `flat_no` int(11) NOT NULL,
  `no_of_members` int(10) NOT NULL,
  `flat_location` varchar(20) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_society_fund`
--

CREATE TABLE IF NOT EXISTS `tbl_society_fund` (
  `s_fund_id` int(11) NOT NULL,
  `fund_name` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `cost` float NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_society_maintainance`
--

CREATE TABLE IF NOT EXISTS `tbl_society_maintainance` (
  `s_maintainance_id` int(11) NOT NULL,
  `s_flat_id` int(11) NOT NULL,
  `s_member_id` int(11) NOT NULL,
  `maintenance_amount` float NOT NULL,
  `date` varchar(20) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_society_maintainance_master`
--

CREATE TABLE IF NOT EXISTS `tbl_society_maintainance_master` (
  `s_maintainance_master_id` int(11) NOT NULL,
  `s_maintainance_id` int(11) NOT NULL,
  `fund_type` varchar(30) NOT NULL,
  `total_amount` float NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_society_secretary`
--

CREATE TABLE IF NOT EXISTS `tbl_society_secretary` (
  `s_secretary_id` int(11) NOT NULL,
  `s_flat_id` int(11) NOT NULL,
  `secretary_name` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `s_image` text NOT NULL,
  `join_date` varchar(20) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_society_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_society_staff` (
  `s_staff_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_proof` varchar(20) NOT NULL,
  `id_proof_image` text NOT NULL,
  `id_proof_no` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `reference` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `work_type` varchar(20) NOT NULL,
  `salary` float NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_society_staff_work`
--

CREATE TABLE IF NOT EXISTS `tbl_society_staff_work` (
  `s_staff_work_id` int(11) NOT NULL,
  `work_name` varchar(30) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_society_visitor`
--

CREATE TABLE IF NOT EXISTS `tbl_society_visitor` (
  `s_visitor_id` int(11) NOT NULL,
  `visitor_name` varchar(20) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `in_time` varchar(20) NOT NULL,
  `out_time` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `vehicle_no` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_society_work_expense`
--

CREATE TABLE IF NOT EXISTS `tbl_society_work_expense` (
  `s_work_expense_id` int(11) NOT NULL,
  `s_staff_work_id` int(11) NOT NULL,
  `labour_work` float NOT NULL,
  `new_equipment` float NOT NULL,
  `equipment_on_rent` float NOT NULL,
  `other_cost` float NOT NULL,
  `total_cost` float NOT NULL,
  `date` varchar(15) NOT NULL,
  `receiver_name` varchar(50) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_s_member`
--

CREATE TABLE IF NOT EXISTS `tbl_s_member` (
  `s_member_id` int(11) NOT NULL,
  `s_flat_id` int(11) NOT NULL,
  `member_full_name` varchar(50) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `id_proof` varchar(50) NOT NULL,
  `flat_no` varchar(20) NOT NULL,
  `flat_ownership` varchar(20) NOT NULL,
  `flat_type` varchar(20) NOT NULL,
  `no_of_members` int(20) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `my_amount` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Block',
  `meid` varchar(100) NOT NULL,
  `profile` varchar(1000) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Table structure for table `tbl_voting`
--

CREATE TABLE IF NOT EXISTS `tbl_voting` (
  `v_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `no_of_votes` int(15) NOT NULL,
  `result` varchar(10) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_voting_declaration`
--

CREATE TABLE IF NOT EXISTS `tbl_voting_declaration` (
  `voting_declation_id` int(11) NOT NULL,
  `candidate_reg_start_date` varchar(30) NOT NULL,
  `candidate_reg_end_date` varchar(30) NOT NULL,
  `voting_date` varchar(30) NOT NULL,
  `result_date` varchar(30) NOT NULL,
  `created_date` varchar(20) NOT NULL,
  `modified_date` varchar(20) NOT NULL,
  `remote_ip` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_watchman_login`
--

CREATE TABLE IF NOT EXISTS `tbl_watchman_login` (
  `w_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_candidate_details`
--
ALTER TABLE `tbl_candidate_details`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `tbl_clubhouse_facilities`
--
ALTER TABLE `tbl_clubhouse_facilities`
  ADD PRIMARY KEY (`clubhouse_facility_id`);

--
-- Indexes for table `tbl_clubhouse_member`
--
ALTER TABLE `tbl_clubhouse_member`
  ADD PRIMARY KEY (`c_member_id`);

--
-- Indexes for table `tbl_clubhouse_payment`
--
ALTER TABLE `tbl_clubhouse_payment`
  ADD PRIMARY KEY (`clubhouse_payment_id`);

--
-- Indexes for table `tbl_complaint_box`
--
ALTER TABLE `tbl_complaint_box`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_facility_booking_payment`
--
ALTER TABLE `tbl_facility_booking_payment`
  ADD PRIMARY KEY (`f_booking_payment_id`);

--
-- Indexes for table `tbl_family_member`
--
ALTER TABLE `tbl_family_member`
  ADD PRIMARY KEY (`family_mem_id`);

--
-- Indexes for table `tbl_fcm_user`
--
ALTER TABLE `tbl_fcm_user`
  ADD PRIMARY KEY (`fcm_user_id`);

--
-- Indexes for table `tbl_household_services`
--
ALTER TABLE `tbl_household_services`
  ADD PRIMARY KEY (`h_services_id`);

--
-- Indexes for table `tbl_maintenance_amount_record`
--
ALTER TABLE `tbl_maintenance_amount_record`
  ADD PRIMARY KEY (`m_amount_id`);

--
-- Indexes for table `tbl_maintenance_status_penalty`
--
ALTER TABLE `tbl_maintenance_status_penalty`
  ADD PRIMARY KEY (`m_s_p_id`);

--
-- Indexes for table `tbl_noticeboard`
--
ALTER TABLE `tbl_noticeboard`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `tbl_professional_corner`
--
ALTER TABLE `tbl_professional_corner`
  ADD PRIMARY KEY (`p_corner_id`);

--
-- Indexes for table `tbl_society`
--
ALTER TABLE `tbl_society`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tbl_society_facility`
--
ALTER TABLE `tbl_society_facility`
  ADD PRIMARY KEY (`s_facility_id`);

--
-- Indexes for table `tbl_society_facility_booking`
--
ALTER TABLE `tbl_society_facility_booking`
  ADD PRIMARY KEY (`s_facility_booking_id`);

--
-- Indexes for table `tbl_society_flats`
--
ALTER TABLE `tbl_society_flats`
  ADD PRIMARY KEY (`s_flat_id`);

--
-- Indexes for table `tbl_society_fund`
--
ALTER TABLE `tbl_society_fund`
  ADD PRIMARY KEY (`s_fund_id`);

--
-- Indexes for table `tbl_society_maintainance`
--
ALTER TABLE `tbl_society_maintainance`
  ADD PRIMARY KEY (`s_maintainance_id`);

--
-- Indexes for table `tbl_society_maintainance_master`
--
ALTER TABLE `tbl_society_maintainance_master`
  ADD PRIMARY KEY (`s_maintainance_master_id`);

--
-- Indexes for table `tbl_society_secretary`
--
ALTER TABLE `tbl_society_secretary`
  ADD PRIMARY KEY (`s_secretary_id`);

--
-- Indexes for table `tbl_society_staff`
--
ALTER TABLE `tbl_society_staff`
  ADD PRIMARY KEY (`s_staff_id`);

--
-- Indexes for table `tbl_society_staff_work`
--
ALTER TABLE `tbl_society_staff_work`
  ADD PRIMARY KEY (`s_staff_work_id`);

--
-- Indexes for table `tbl_society_visitor`
--
ALTER TABLE `tbl_society_visitor`
  ADD PRIMARY KEY (`s_visitor_id`);

--
-- Indexes for table `tbl_society_work_expense`
--
ALTER TABLE `tbl_society_work_expense`
  ADD PRIMARY KEY (`s_work_expense_id`);

--
-- Indexes for table `tbl_s_member`
--
ALTER TABLE `tbl_s_member`
  ADD PRIMARY KEY (`s_member_id`);

--
-- Indexes for table `tbl_voting`
--
ALTER TABLE `tbl_voting`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `tbl_voting_declaration`
--
ALTER TABLE `tbl_voting_declaration`
  ADD PRIMARY KEY (`voting_declation_id`);

--
-- Indexes for table `tbl_watchman_login`
--
ALTER TABLE `tbl_watchman_login`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_login`
--
ALTER TABLE `tbl_admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_candidate_details`
--
ALTER TABLE `tbl_candidate_details`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_clubhouse_facilities`
--
ALTER TABLE `tbl_clubhouse_facilities`
  MODIFY `clubhouse_facility_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_clubhouse_member`
--
ALTER TABLE `tbl_clubhouse_member`
  MODIFY `c_member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_clubhouse_payment`
--
ALTER TABLE `tbl_clubhouse_payment`
  MODIFY `clubhouse_payment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_complaint_box`
--
ALTER TABLE `tbl_complaint_box`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_facility_booking_payment`
--
ALTER TABLE `tbl_facility_booking_payment`
  MODIFY `f_booking_payment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_family_member`
--
ALTER TABLE `tbl_family_member`
  MODIFY `family_mem_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_fcm_user`
--
ALTER TABLE `tbl_fcm_user`
  MODIFY `fcm_user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_household_services`
--
ALTER TABLE `tbl_household_services`
  MODIFY `h_services_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_maintenance_amount_record`
--
ALTER TABLE `tbl_maintenance_amount_record`
  MODIFY `m_amount_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_maintenance_status_penalty`
--
ALTER TABLE `tbl_maintenance_status_penalty`
  MODIFY `m_s_p_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_noticeboard`
--
ALTER TABLE `tbl_noticeboard`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_professional_corner`
--
ALTER TABLE `tbl_professional_corner`
  MODIFY `p_corner_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_society`
--
ALTER TABLE `tbl_society`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_society_facility`
--
ALTER TABLE `tbl_society_facility`
  MODIFY `s_facility_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_society_facility_booking`
--
ALTER TABLE `tbl_society_facility_booking`
  MODIFY `s_facility_booking_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_society_flats`
--
ALTER TABLE `tbl_society_flats`
  MODIFY `s_flat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_society_fund`
--
ALTER TABLE `tbl_society_fund`
  MODIFY `s_fund_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_society_maintainance`
--
ALTER TABLE `tbl_society_maintainance`
  MODIFY `s_maintainance_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_society_maintainance_master`
--
ALTER TABLE `tbl_society_maintainance_master`
  MODIFY `s_maintainance_master_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_society_secretary`
--
ALTER TABLE `tbl_society_secretary`
  MODIFY `s_secretary_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_society_staff`
--
ALTER TABLE `tbl_society_staff`
  MODIFY `s_staff_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_society_staff_work`
--
ALTER TABLE `tbl_society_staff_work`
  MODIFY `s_staff_work_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_society_visitor`
--
ALTER TABLE `tbl_society_visitor`
  MODIFY `s_visitor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_society_work_expense`
--
ALTER TABLE `tbl_society_work_expense`
  MODIFY `s_work_expense_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_s_member`
--
ALTER TABLE `tbl_s_member`
  MODIFY `s_member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tbl_voting`
--
ALTER TABLE `tbl_voting`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_voting_declaration`
--
ALTER TABLE `tbl_voting_declaration`
  MODIFY `voting_declation_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_watchman_login`
--
ALTER TABLE `tbl_watchman_login`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
