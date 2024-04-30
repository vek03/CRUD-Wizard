SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `wizard_bd`
--

CREATE DATABASE IF NOT EXISTS `wizard_bd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wizard_bd`;

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteCliente` (IN `id` INT(11))   DELETE FROM clientes WHERE cliente_id = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `readAll` ()   SELECT
	cliente_id,
	nome,
    ocultar_email(email) AS email,
    formatar_data(dt_nasc) AS dt_nasc
FROM clientes$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `readCliente` (IN `id` INT(11))   SELECT
	cliente_id,
	nome,
    ocultar_email(email) AS email,
    formatar_data(dt_nasc) AS dt_nasc
FROM clientes WHERE cliente_id = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `store` (IN `nom` VARCHAR(255), IN `em` VARCHAR(255), IN `dt` DATE)   INSERT INTO clientes (nome, email, dt_nasc) VALUES (nom, em, dt)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateCliente` (IN `id` INT(11), IN `nom` VARCHAR(255), IN `em` VARCHAR(255), IN `dt` DATE)   UPDATE clientes
SET nome = nom,
	email = em,
	dt_nasc = dt
WHERE cliente_id = id$$

--
-- Funções
--
CREATE DEFINER=`root`@`localhost` FUNCTION `formatar_data` (`data` DATE) RETURNS VARCHAR(10) CHARSET utf8mb4  RETURN DATE_FORMAT(data, '%d/%m/%Y')$$

CREATE DEFINER=`root`@`localhost` FUNCTION `ocultar_email` (`email` VARCHAR(255)) RETURNS VARCHAR(255) CHARSET utf8mb4  BEGIN
    DECLARE pos INT;
    SET pos = LOCATE('@', email);
    RETURN CONCAT(SUBSTRING(email, 1, pos), '****');
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cliente_id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(895) NOT NULL,
  `email` varchar(345) NOT NULL,
  `dt_nasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cliente_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cliente_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
