import mysql.connector
from mysql.connector import Error
class DAO():
  def __init__(self):
    try:
      self.connection=mysql.connector.connect(
      host = 'localhost',
      port = 3306,
      user = 'root',
      password = '',
      db = 'python_db' 
    )
    except Error as ex:
      print("Erro de conexion con tu base de datos: {#}".format(ex))

  def selectUser(self,id):
    if self.connection.is_connected():
      try:
        cursor = self.connection.cursor();
        sql="SELECT * FROM usuario WHERE business_cif = {0} "
        cursor.execute(sql.format(id))
        data =  cursor.fetchone() 
        return data
      except Error as ex:
        print("Erro de conexion con tu base de datos: {0}".format(ex))