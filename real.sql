-- MySQL dump 10.13  Distrib 8.0.19, for Linux (x86_64)
--
-- Host: localhost    Database: Project
-- ------------------------------------------------------
-- Server version	8.0.19-0ubuntu0.19.10.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Announcements`
--

DROP TABLE IF EXISTS `Announcements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Announcements` (
  `about` text,
  `dt` date DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `an_num` int NOT NULL AUTO_INCREMENT,
  `c_id` int DEFAULT NULL,
  PRIMARY KEY (`an_num`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `c_id` FOREIGN KEY (`c_id`) REFERENCES `Contests` (`contest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Announcements`
--

LOCK TABLES `Announcements` WRITE;
/*!40000 ALTER TABLE `Announcements` DISABLE KEYS */;
INSERT INTO `Announcements` VALUES ('first contest','2020-04-20','admin',1,NULL),('second contest','2020-04-20','admin',2,2);
/*!40000 ALTER TABLE `Announcements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ContestProblem`
--

DROP TABLE IF EXISTS `ContestProblem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ContestProblem` (
  `contest_id` int DEFAULT NULL,
  `qid` int DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `number_of_ac` int DEFAULT NULL,
  KEY `qid` (`qid`),
  KEY `contest_id` (`contest_id`),
  CONSTRAINT `ContestProblem_ibfk_1` FOREIGN KEY (`contest_id`) REFERENCES `Contests` (`contest_id`),
  CONSTRAINT `ContestProblem_ibfk_2` FOREIGN KEY (`qid`) REFERENCES `Problems` (`qid`),
  CONSTRAINT `ContestProblem_ibfk_3` FOREIGN KEY (`qid`) REFERENCES `Problems` (`qid`),
  CONSTRAINT `ContestProblem_ibfk_4` FOREIGN KEY (`contest_id`) REFERENCES `Contests` (`contest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ContestProblem`
--

LOCK TABLES `ContestProblem` WRITE;
/*!40000 ALTER TABLE `ContestProblem` DISABLE KEYS */;
INSERT INTO `ContestProblem` VALUES (2,1,'A+B',1);
/*!40000 ALTER TABLE `ContestProblem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Contests`
--

DROP TABLE IF EXISTS `Contests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Contests` (
  `contest_id` int NOT NULL,
  `contest_name` varchar(255) DEFAULT NULL,
  `time_remaining` varchar(255) DEFAULT NULL,
  `dt` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`contest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Contests`
--

LOCK TABLES `Contests` WRITE;
/*!40000 ALTER TABLE `Contests` DISABLE KEYS */;
INSERT INTO `Contests` VALUES (1,'first contest','6 days','2020-04-20','this is the first contest hosting',1),(2,'second','1 day','2020-04-20','second contest',0);
/*!40000 ALTER TABLE `Contests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Problems`
--

DROP TABLE IF EXISTS `Problems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Problems` (
  `qid` int NOT NULL,
  `question_name` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `problem_description` text,
  `testcases` text,
  `problem_input` text,
  `output` text,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Problems`
--

LOCK TABLES `Problems` WRITE;
/*!40000 ALTER TABLE `Problems` DISABLE KEYS */;
INSERT INTO `Problems` VALUES (1,'a+b','easy mathematics','given two integers add the following and print the result','5 1 2 1 3 1 4 1 5 1 6','n,a,b<=10^5','3 4 5 6 7'),(2,'a+b','easy mathematics','given two integers multiply the following and print the result','5 1 2 1 3 1 4 1 5 1 6','n,a,b<=10^5','2 3 4 5 6');
/*!40000 ALTER TABLE `Problems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Submissions`
--

DROP TABLE IF EXISTS `Submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Submissions` (
  `sub_id` int NOT NULL AUTO_INCREMENT,
  `submitted_code` text,
  `problem_id` int DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sub_id`),
  KEY `problem_id_idx` (`problem_id`),
  KEY `username_idx` (`user_name`),
  CONSTRAINT `problem_id` FOREIGN KEY (`problem_id`) REFERENCES `Problems` (`qid`),
  CONSTRAINT `user_name` FOREIGN KEY (`user_name`) REFERENCES `Users` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Submissions`
--

LOCK TABLES `Submissions` WRITE;
/*!40000 ALTER TABLE `Submissions` DISABLE KEYS */;
INSERT INTO `Submissions` VALUES (1,'#include<stdio.h>\nint main()\n{\nreturn 0;\n}',NULL,NULL,NULL,NULL),(2,'#include<stdio.h>\nint main()\n{\nreturn 0;\n}',NULL,NULL,NULL,NULL),(3,'#include<stdio.h>\nint main()\n{\nreturn 0;\n}',NULL,NULL,NULL,NULL),(4,'#include<stdio.h>\nint main()\n{\nreturn 0;\n}',NULL,NULL,NULL,NULL),(5,'#include<stdio.h>\nint main()\n{\nreturn 0;\n}',NULL,NULL,NULL,NULL),(6,'#include<stdio.h>\nint main()\n{\nreturn 0;\n}',NULL,NULL,NULL,NULL),(7,'#include<stdio.h>\nint main()\n{\nreturn 0;\n}',NULL,NULL,NULL,NULL),(8,'#include<stdio.h>\nint main()\n{\nreturn 0;\n}',NULL,NULL,NULL,NULL),(9,'#include<stdio.h>\nint main()\n{\n  int n;\n  scanf(\"%d\",&n);\n  while(n--)\n  {\n    int a,b;\n    scanf(\"%d %d\",&a,&b);\n    printf(\"%d \",a+b);\n  }\nreturn 0;\n}',NULL,NULL,NULL,NULL),(10,'#include<bits/stdc++.h>\nusing namespace std;\nint main()\n{\n int n;\n  cin>>n;\n  while(n--)\n  {\n    int a,b;\n    cin>>a>>b;\n    cout<<a+b<<\" \";\n  }\nreturn 0;\n}',NULL,NULL,NULL,NULL),(11,'#include<bits/stdc++.h>\nusing namespace std;\nint main()\n{\n int n;\n  cin>>n;\n  while(n--)\n  {\n    int a,b;\n    cin>>a>>b;\n    cout<<a+b<<\" \";\n  }\nreturn 0;\n}',NULL,NULL,NULL,NULL),(12,'#include<bits/stdc++.h>\nusing namespace std;\nint main()\n{\n int n;\n  cin>>n;\n  while(n--)\n  {\n    int a,b;\n    cin>>a>>b;\n    cout<<a+b<<\" \";\n  }\nreturn 0;\n}',NULL,NULL,NULL,NULL),(13,'#include<bits/stdc++.h>\nusing namespace std;\nint main()\n{\n int n;\n  cin>>n;\n  while(n--)\n  {\n    int a,b;\n    cin>>a>>b;\n    cout<<a+b<<\" \";\n  }\nreturn 0;\n}',NULL,NULL,NULL,NULL),(14,'#include<bits/stdc++.h>\nusing namespace std;\nint main()\n{\n int n;\n  cin>>n;\n  while(n--)\n  {\n    int a,b;\n    cin>>a>>b;\n    cout<<a*b<<\" \";\n  }\nreturn 0;\n}',NULL,NULL,NULL,NULL),(15,'#include<stdio.h>\nint main()\n{\nint n;\n  scanf(\"%d\",&n);\n  while(n--)\n  {\n    int a,b;\n    scanf(\"%d %d\",&a,&b);\n    printf(\"%d \",a+b);\n  }\nreturn 0;\n}',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `Submissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Tcs`
--

DROP TABLE IF EXISTS `Tcs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Tcs` (
  `tc_number` int NOT NULL,
  `tc_text` text,
  `out_put` text,
  `qid` int DEFAULT NULL,
  PRIMARY KEY (`tc_number`),
  KEY `testcases_fk` (`qid`),
  CONSTRAINT `testcases_fk` FOREIGN KEY (`qid`) REFERENCES `Problems` (`qid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Tcs`
--

LOCK TABLES `Tcs` WRITE;
/*!40000 ALTER TABLE `Tcs` DISABLE KEYS */;
/*!40000 ALTER TABLE `Tcs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Users` (
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passkey` varchar(255) DEFAULT NULL,
  `Solved` int DEFAULT '0',
  `Submissions` int DEFAULT '0',
  `image` blob,
  `Score` int DEFAULT NULL,
  `Realname` varchar(255) DEFAULT NULL,
  `College` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_name`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES ('asd','asd@gmail.com','asd',0,0,NULL,NULL,'asd','asd'),('loser','somethingrandom@gmail.com','asd',0,0,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-21 13:12:37
