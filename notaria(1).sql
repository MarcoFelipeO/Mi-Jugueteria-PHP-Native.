-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2023 a las 13:27:42
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `requerimientos` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `ruta` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `nombre`, `descripcion`, `requerimientos`, `ruta`) VALUES
(1, 'Finiquito\r\n', 'Es un acto por el cual un trabajador y un empleador ratifican o aprueban ante un Ministro de Fe el término de la relación laboral y su acuerdo con lo estipulado en un documento escrito denominado finiquito.', '**Traer carnet.<br>\n**Traer antecedentes.<br>\nCédula de identidad vigente.<br>\nProyecto de finiquito (tres copias). <br>\nPlanillas de cotizaciones previsionales del trabajador o certificado que acredite su pago íntegro.<br>\n\nOtros antecedentes:\n<br>\nPoder simple, si el trámite es realizado por un representante del trabajador o el empleador.', 'assets/img/portfolio/finiquito1.jpg'),
(2, 'Testamento\r\n', 'Acto jurídico, individual, libre y revocable por el que una persona regula su sucesión nombrando uno o más herederos.', 'En el testamento debe constar el nombre, edad, domicilio y nacionalidad del testador, detalle de sus matrimonios y de todos sus hijos, la declaración de hallarse en pleno uso de sus facultades y el nombre y domicilio de los testigos.<br> El documento debe firmarse por el testador, el notario y los testigos.', 'assets/img/portfolio/testamento.jpg'),
(3, 'Herencia\r\n\r\n', 'Es la transmisión por causa de muerte, sea a título universal (herencia propiamente dicha), o a título particular (o de legado), es decir, la transmisión de bienes y derechos por fallecimiento de una persona, entre el fallecido y otra persona (su her', 'Acércate a una de nuestras sucursales y presenta:\r\n<br>\r\nDeclaración jurada de inexistencia de beneficiarios de pensión, es decir que no existen otros beneficiarios aparte de ti y los que acredites en el documento.<br>\r\nCompletar datos del heredero solicitante.<br>\r\nCertificados civiles que acrediten relación familiar con el afiliado fallecido.<br>\r\nPoder para cobrar y percibir los fondos, si existe un menor de edad entre los herederos.<br>\r\nSi hay herederos mujeres, deben acreditar estado civil.<br>\r\nDeclaración jurada donde se indique que no existen más herederos que los informados.<br>\r\nAdemás, si el saldo de la cuenta del afiliado fallecido es superior a 5 UTA, debes presentar:<br>\r\n\r\nPosesión Efectiva, la cual se obtiene en el Servicio de Registro Civil (si no existe testamento) o en el Juzgado Civil (si existe testamento).', 'assets/img/portfolio/herencia.jpg'),
(4, 'Declaración de herederos abintestato', 'Es heredero abintestato aquella persona o personas que, al no haber un heredero nombrado en testamento, lo es por establecerlo la ley. Para ser nombrado heredero abintestato es necesario formalizar un expediente de declaración ante notario.', 'La declaración de herederos abintestato es el documento público que permite determinar, de conformidad con la legislación civil aplicable a cada caso, quiénes son los herederos de una persona fallecida que no ha otorgado testamento y en qué proporción lo son.', 'assets/img/portfolio/declaracion-de-herederos.jpg'),
(5, 'Capitulaciones matrimoniales', 'Acuerdo entre cónyuges cuyo objetivo esencial es pactar un régimen económico conyugal, así como liquidar el anterior.', '¿Cómo presentar capitulaciones matrimoniales?\r\nLas capitulaciones se pueden efectuar antes o después de contraer matrimonio. El único requisito es que los dos cónyuges estén de acuerdo y acudan a un notario para que les asesore, redacte y autorice la escritura pública, que deberá inscribirse en el Registro Civil.', 'assets/img/portfolio/capitulaciones-matrimoniales.jpg'),
(6, 'Bodas, separaciones y divorcios', 'Actualmente puede contraerse matrimonio ante notario. Los cónyuges también pueden divorciarse de mutuo acuerdo (o separarse) acud', '¿Cómo se lleva a cabo un proceso de divorcio?\r\nEl divorcio puede solicitarse por uno de los cónyuges manifestando únicamente su voluntad de no querer continuar en matrimonio. El Juez podrá decretar la disolución del vínculo matrimonial sin necesidad de que el cónyuge promovente exprese motivo alguno.', 'assets/img/portfolio/bodas.jpg'),
(7, 'Poder', 'Facultad que se da a otra persona para realizar y ejecutar determinados actos jurídicos y materiales en nuestro nombre. El apoderado no tiene que aceptar el poder, es una decisión unilateral del poderdante. ', '¿Qué se necesita para dar un poder notarial?\r\nLlenar una solicitud.\r\nComparecencia de la persona facultada para otorgar poder a nombre de la persona moral.\r\nPresentar original y copia de una identificación oficial con fotografía y firma: ...\r\nEntregar copia certificada reciente (mínimo seis meses de anterioridad) del acta constitutiva de la sociedad.', 'assets/img/portfolio/poder.jpg'),
(8, 'Actas', 'Documento en el que el notario hace constar la relación de lo acontecido durante la celebración de una asamblea, congreso, sesión, vista judicial o reunión de cualquier naturaleza, así como de los acuerdos o decisiones tomadas. ', 'es el documento notarial que tiene por objeto la comprobación de hechos, por ejemplo: constatación de estado de un inmueble. da certeza sobre lo que el escribano vio o pasó ante él. las personas deben solicitar expresamente al escribano lo que debe comprobar.', 'assets/img/portfolio/acta.jpg'),
(9, 'Compraventa', 'Contrato por virtud del cual uno de los contratantes se obliga a transferir la propiedad de una cosa o derecho y el otro se obliga a pagar por ello un precio convenido. Puede ser de inmuebles, muebles o derechos.', '', ''),
(10, 'Préstamo hipotecario', 'Préstamo que tiene como garantía de pago un bien inmueble o varios, ya sean viviendas, locales, garajes, solares, etc. ', 'Algunos requisitos para comprobar su capacidad de pago son:<br>\r\n\r\nPara trabajadores dependientes, copia de sus últimas liquidaciones de sueldo.<br>\r\nCopia de su contrato, si corresponde, para acreditar antigüedad laboral.<br>\r\nCédula de identidad.<br>\r\nPara trabajadores independientes, declaraciones de renta que acrediten sus ingresos.<br>\r\nAcreditación de otros bienes que pueda tener como autos, participación en empresas, bienes raíces, etc.<br>\r\nEn caso de complementar renta con otra persona, le serán solicitados los mismos antecedentes.<br>\r\nAdemás, se le solicitarán todos los antecedentes de la propiedad que está comprando de manera de confirmar que se podrá poner a nombre del deudor e hipotecar a nombre del banco.<br>\r\n\r\nPor último, debe tener en cuenta que cada institución, más allá del cumplimiento legal, posee autonomía para establecer las condiciones que estimen conveniente al momento de otorgar el crédito.<br>', 'assets/img/portfolio/prestamo-hipotecario.jpg'),
(11, 'Préstamo personal', 'El préstamo es un contrato por la cual una entidad financiera o no financiera o un particular ponen a nuestra disposición una cantidad determinada de dinero.', '', ''),
(12, 'Donación', 'La donación es un contrato mediante el cual una persona transfiere gratuitamente bienes a otra.', '', ''),
(13, 'Constitución de sociedades mercantiles', 'Acto de fundación de una sociedad en el que se definen elementos básicos: capital inicial, domicilio, régimen jurídico, etc. ', '', ''),
(14, 'Póliza', ' Documento mercantil redactado por una de las partes. Si la interviene un notario tiene efectos a la hora de exigir por vía judicial lo pactado en ella.', '', ''),
(15, 'Protesto', 'Documento donde se hace constar la negativa de aceptar o pagar una letra de cambio, pagaré o cheque para no perjudicar o disminuir los derechos y acciones de las personas que han intervenido.', '', ''),
(16, 'Reclamación de deudas', ' El procedimiento de reclamación de deudas no contradichas o \"monitorio notarial\" es  un procedimiento extrajudicial por el que las personas a quienes se les debe una cantidad de dinero pueden conseguir una carta de pago voluntaria o un título de eje', '', ''),
(17, 'Conciliación', 'Ante notario pueden resolverse controversias contractuales, mercantiles, sucesorias o familiares, siempre que no sean concursales', '', ''),
(18, 'Compraventa Vehiculos', 'Contrato por virtud del cual uno de los contratantes se obliga a transferir la propiedad de una cosa o derecho y el otro, a su vez, se obliga a pagar por ello un precio convenido', '', ''),
(19, 'Declaración de obra nueva', 'es la manifestación en escritura pública del propietario o de todos los copropietarios de una finca de haberse proyectado, comenzado o concluido edificios, nuevas plantas o mejoras en los mismo, es decir, la edificación (', '', ''),
(20, 'Préstamo hipotecario', 'Préstamo que tiene como garantía de pago un bien inmueble o varios, sean viviendas, locales, garajes, solares, fincas rústicas, etc.', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `notaria_id` int(11) NOT NULL,
  `hora` time NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `tipo` enum('mañana','tarde') COLLATE utf8_spanish_ci NOT NULL,
  `dia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `notaria_id`, `hora`, `disponible`, `tipo`, `dia`) VALUES
(1, 1, '10:00:00', 0, 'mañana', '2023-01-09'),
(5, 2, '09:30:00', 1, 'mañana', '2023-01-09'),
(6, 2, '10:30:00', 1, 'mañana', '2023-01-09'),
(7, 2, '11:00:00', 1, 'mañana', '2023-01-09'),
(8, 2, '11:30:00', 0, 'mañana', '2023-01-09'),
(9, 2, '12:00:00', 1, 'mañana', '2023-01-09'),
(10, 2, '12:30:00', 1, 'mañana', '2023-01-09'),
(11, 2, '13:00:00', 1, 'tarde', '2023-01-09'),
(12, 2, '14:00:00', 0, 'tarde', '2023-01-09'),
(13, 2, '15:00:00', 1, 'tarde', '2023-01-09'),
(14, 2, '16:00:00', 1, 'tarde', '2023-01-09'),
(15, 2, '17:00:00', 1, 'tarde', '2023-01-09'),
(16, 2, '09:00:00', 1, 'mañana', '2023-01-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notarias`
--

CREATE TABLE `notarias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `latitud` decimal(10,0) NOT NULL,
  `longitud` decimal(10,0) NOT NULL,
  `referencia` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `comuna` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `notarias`
--

INSERT INTO `notarias` (`id`, `nombre`, `direccion`, `latitud`, `longitud`, `referencia`, `comuna`) VALUES
(1, 'Las Petunias', 'AV. Las condes #1435', '-33', '-71', 'Metro Las Condes', 'Las Condes'),
(2, 'Las Begonias', 'AV. Macul #1454', '34', '-22', 'Metro Macul', 'Macul'),
(3, 'Los Cardenales', 'Av. EYZAGUIRRE #13432', '-33', '42', 'Metro PLAZA PUENTE ALTO', 'Puente Alto'),
(4, 'Las Hortencias', 'Av. Pedro de Valdivia #100334', '10', '10', 'Metro Pedro de Valdivia\r\n', 'Providencia'),
(5, 'Las Amapolas', 'AV. Departamental #130032', '10', '20', 'Edificio Titanium', 'El Bosque'),
(6, 'Los Claveles ', 'AV.Exequiel Fernandez #14932', '10', '14', 'Portal Ñuñoa', 'Ñuñoa'),
(7, 'Las Bugambilia', 'AV. PEÑALOLEN LAS TORRES #1332322', '212', '9422', 'Metro Las Torres', 'Peñalolen'),
(8, 'Los Azeleaos', 'AV. VIÑA DEL MAR #145553', '434', '332', 'Reloj de Flores', 'Viña Del Mar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notaria_id` (`notaria_id`);

--
-- Indices de la tabla `notarias`
--
ALTER TABLE `notarias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `notarias`
--
ALTER TABLE `notarias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`notaria_id`) REFERENCES `notarias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
