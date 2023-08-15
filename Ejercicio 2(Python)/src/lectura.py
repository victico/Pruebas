from PyPDF2 import PdfReader, PdfWriter
from PyPDF2.generic import NameObject
from connection_db import DAO
import datetime
import locale

def initMenu():
  play= True
  while(play):
    wrongOption = False
    while(not wrongOption):
      print("########### Hola ###########\n ")
      print("Ingresa el CIF del usuario para rellenar el pdf PDF")
      print(" \n############################ \n ")
      try:
        cif = int(input("Ingresa el CIF: "))
      except ValueError:
        print("\n Debes escribir un número.")
        continue
      getData(cif)
      wrongOption=True
      play=False
      
def getData(cif):
  dao = DAO()
  try:
    user=dao.selectUser(cif)
    if len(user) > 0:
      makePdf(user)
    else:
      print('No se encontro registro con ese CIF')
  except:
      print('No se encontro registro con ese CIFs')

def FormatDate():
  today = datetime.datetime.now()
  formatToday = today.strftime("%d-%m-%Y")   
  return formatToday 
  
def makePdf(user):
  reader = PdfReader(open("./src/files/formulario_nueva_instalacion.pdf", "rb"), strict=False)
  writer = PdfWriter()

  page = reader.pages[0]
  fields = reader.get_fields()

  writer.add_page(page)

  writer.update_page_form_field_values(
      writer.pages[0],
      {
        "Fecha": FormatDate(),
        "Nombre establecimiento": " "+user[1],
        "Dirección": " "+user[2],
        "CP":" "+user[3],
        "Localidad":" "+user[4],
        "Provincia":" "+user[5],
        "Persona contacto":" "+user[6],
        "Teléfono contacto":" "+user[7],
        "email":" "+user[8],
        "Sector actividad":" "+user[9],
        "comisión":user[11],
        "porcentaje retorno":user[13] if user[12] == 1 else " ",
        "Fondo inicial":user[14],
        "Nombre empresa":" "+user[16],
        "CIF":" "+user[17],
        "Dirección Fiscal":" "+user[18],
        "CP 2":" "+user[19],
        "Localidad 2":" "+user[20],
        "Provincia 2":" "+user[21],
        "Nombre administrador":" "+user[22],
        "DNI administrador":" "+user[23]
        
      }, 1
  )
  for i in range(len(page["/Annots"])): #in order to access the "Annots" key 

    if (page["/Annots"][i].get_object()).get('/FT') and (page["/Annots"][i].get_object())['/FT']=="/Btn": #this is my filter so that I can filter checkboxes and the checkbox I want i.e. "Check Box 3"
        writer_annot = page["/Annots"][i].get_object() 
        
        writer_annot.update(
        {
            NameObject("/V"): NameObject(
                "/1"), #NameObject being only for checkbox, and please try "/Yes" or "/1" or "/On" to see which works
            NameObject("/AS"): NameObject(
                "/1" #NameObject being only for checkbox, and please try "/Yes" or "/1" or "/On" to see which works
            ),
            NameObject("/AP"): NameObject(
                "/S" #NameObject being only for checkbox, and please try "/Yes" or "/1" or "/On" to see which works
            )
        }
    )


        
  title="formulario_nueva_instalacion_{0}_{1}.pdf".format(user[1],FormatDate())
  with open(title, "wb") as output_stream:
      writer.write(output_stream)
      print('PDF RELLENADO CON EXITO!')

initMenu()