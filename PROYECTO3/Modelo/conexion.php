<?php
$servername = "localhost";
$username = "root"; // Cambia esto si es necesario
$password = ""; // Cambia esto si es necesario
$dbname = "avataresbd";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

<?php
class Conexion
{
    private $usuario = "root";
    private $pass = "";
    private $dbconn = null;
    private $dns = "mysql:host=localhost:3306;dbname=avataresbd";
    private $error = null;

    private function conectar()
    {
        try {
            $this->dbconn = new PDO($this->dns, $this->usuario, $this->pass);
            $this->dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    public function consultar($tabla)
    {
        try {
            if (!$this->conectar()) {
                return "No conecta: " . $this->error;
            }
            $query = "SELECT * FROM $tabla";
            $result_set = $this->dbconn->prepare($query);
            $result_set->execute();
            return $result_set->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function insertar($tabla, $datos)
    {
        try {
            if (!$this->conectar()) {
                return "No conecta: " . $this->error;
            }
            $sql = "INSERT INTO $tabla (";
            foreach ($datos as $clave => $valor) {
                $sql .= "$clave, ";
            }
            $sql = rtrim($sql, ', ') . ") VALUES (";
            foreach ($datos as $clave => $valor) {
                $sql .= ":$clave, ";
            }
            $sql = rtrim($sql, ', ') . ")";
            $stmt = $this->dbconn->prepare($sql);
            foreach ($datos as $clave => $valor) {
                $stmt->bindValue(":$clave", $valor);
            }
            $stmt->execute();
            return "Datos insertados...";
        } catch (Exception $e) {
            $this->error = $e->getMessage();
            return "Error al insertar: " . $this->error;
        }
    }

    public function consultarFiltro($tabla, $filtro)
    {
        try {
            if (!$this->conectar()) {
                return "No conecta: " . $this->error;
            }
            $query = "SELECT * FROM $tabla WHERE ";
            foreach ($filtro as $clave => $valor) {
                $query .= "$clave = :$clave AND ";
            }
            $query = rtrim($query, ' AND ');
            $result_set = $this->dbconn->prepare($query);
            foreach ($filtro as $clave => $valor) {
                $result_set->bindValue(":$clave", $valor);
            }
            $result_set->execute();
            return $result_set->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function actualizar($tabla, $datos, $filtro)
    {
        try {
            if (!$this->conectar()) {
                return "No conecta: " . $this->error;
            }
            $sql = "UPDATE $tabla SET ";
            foreach ($datos as $clave => $valor) {
                $sql .= "$clave = :$clave, ";
            }
            $sql = rtrim($sql, ', ') . " WHERE ";
            foreach ($filtro as $clave => $valor) {
                $sql .= "$clave = :$clave AND ";
            }
            $sql = rtrim($sql, ' AND ');
            $stmt = $this->dbconn->prepare($sql);
            foreach ($datos as $clave => $valor) {
                $stmt->bindValue(":$clave", $valor);
            }
            foreach ($filtro as $clave => $valor) {
                $stmt->bindValue(":$clave", $valor);
            }
            $stmt->execute();
            return "Datos actualizados...";
        } catch (Exception $e) {
            $this->error = $e->getMessage();
            return "Error al actualizar: " . $this->error;
        }
    }

    public function eliminar($tabla, $filtro)
    {
        try {
            if (!$this->conectar()) {
                return "No conecta: " . $this->error;
            }
            $where = "";
            foreach ($filtro as $clave => $valor) {
                $where .= "$clave = :$clave AND ";
            }
            $where = rtrim($where, ' AND ');
            $sql = "DELETE FROM $tabla WHERE $where";
            $stmt = $this->dbconn->prepare($sql);
            foreach ($filtro as $clave => $valor) {
                $stmt->bindValue(":$clave", $valor);
            }
            $stmt->execute();
            return "Datos eliminados...";
        } catch (Exception $e) {
            $this->error = $e->getMessage();
            return "Error al eliminar: " . $this->error;
        }
    }

    public function getError()
    {
        return $this->error;
    }
}

?>