-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: cursosps
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) DEFAULT NULL,
  `descripcion` varchar(2000) DEFAULT NULL,
  `numeroalumnos` int(5) DEFAULT NULL,
  `profesor` varchar(10) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `duracion` int(10) DEFAULT NULL,
  `alumnos` varchar(100) DEFAULT NULL,
  `imagen` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES (184,'Toleracion y aceptacion','La palabra aceptación se usa como un sustantivo. Por otro lado, la palabra tolerancia también se usa como un nombre. La palabra tolerancia se forma a partir del verbo ',0,'Richar Smi','2022-12-14','Abierto',100,'','https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/profe1.jpg?v=1651246987934'),(185,'Gnoseología','La gnoseología también llamada teoría del conocimiento, es la rama de la filosofía que estudia la posibilidad, el origen o medios, la naturaleza o esencia, y la fenomenología del conocimiento. No estudia los conocimientos particulares, sino la naturaleza del conocimiento en general.',0,'Marta Hida','2022-11-06','Abierto',55,'','https://cdn.glitch.global/c031a154-e67b-41f9-a8ba-5df27404e59a/profesora.jpg?v=1651246977644'),(188,'FlashDiet','FlashDiet: Aprende a comer sano En este curso aprenderás las bases de la nutrición humana y la alimentación sana como herramientas para llevar una vida saludable.',0,'Alfonso Ro','2023-01-18','Abierto',40,NULL,'https://www.mutuauniversal.net/export/sites/webpublica/.galleries/Promocion_salud/dieta-saludable.png'),(189,'Riñones: conoce sus funciones para ','Encuentra las respuestas a preguntas de la vida cotidiana al entender el funcionamiento de tus riñones',0,'Manuel Gim','2013-02-12','Abierto',62,NULL,'https://www.bienestarcolsanitas.com/images/2-SECCIONES/SALUD/ABC/CUIDAR_LOS_RI%C3%91ONES/DIA-RI%C3%91%C3%93N-SLIDE.jpg'),(192,'Bienestar para el desarrollo person','Aprende sobre las herramientas y canales que te llevarán a un balance en tu vida, para un mejor desarrollo personal y profesional, logrando conseguir un estado de bienestar integral',0,'Daniel Man','2022-12-15','Abierto',48,NULL,'https://deustosaludopiniones.com/wp-content/uploads/2018/11/sunset-summer-golden-hour-paul-filitchkin.jpg'),(193,'Educación emocional para el bienest','Desarrolla competencias emocionales a través de la educación emocional que favorezcan herramientas para el manejo de aspectos individuales, relacionales y contextuales, que permitan alcanzar tus metas personales',0,'Jose Maria','2023-01-12','Abierto',32,NULL,'https://amadag.com/wp-content/uploads/2019/04/emociones-negativas.jpg');
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `nick` varchar(15) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellidos` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `edad` int(15) NOT NULL,
  `correo` varchar(15) NOT NULL,
  `como` varchar(50) DEFAULT NULL,
  `telefono` int(9) NOT NULL,
  `opinion` varchar(50) DEFAULT NULL,
  `sugerencia` varchar(50) DEFAULT NULL,
  `cursos` varchar(50) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`nick`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('Admin','','','$2y$15$ZH5pzkKyTkL3WjRI7aJwMuSGSaIKA7C0EXJ/pwWTADXSC9nmiOu3O',0,'','',0,NULL,NULL,NULL,'administrador'),('usuario1','usuario','1','$2y$15$SQIlE364O0uvHiCg11sFOeTCeZomjRkUu4zFCbW7/8TOMwFgoG/Fm',22,'@usuario1',' usuario1',66666666,' usuario1','usuario1','','usuario'),('usuario2','usuario','2','$2y$15$wIbrfyEkh.2.iVyIbA8lP.SviWmoYMkTS.GwLHGcOFlCN2zy0iYma',23,'@usuario2',' usuario2',66666666,' usuario2','usuario2',NULL,'usuario'),('usuario3','usuario','3','$2y$15$tKpuTq8sFpzMUVi1azVRG.mI90lviY7CXwiNY8.ZTbkshmqbSOq96',24,'@usuario3',' usuario3',66666666,' usuario3','usuario3',NULL,'usuario');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-16 14:42:08
