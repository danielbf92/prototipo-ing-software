function CambiarEtiqueta(){
    var Tab = Xrm.Page.ui.tabs.get("tab_2");
    var name;
    var guid;
 
    var lookupItem = Xrm.Page.getAttribute("mv_transaccion").getValue();
    if (lookupItem != null)
    {       
          Xrm.Page.ui.clearFormNotification("AbaNoValido");
          Xrm.Page.ui.clearFormNotification("AbaIntermediarioNoValido");
          Xrm.Page.ui.clearFormNotification("AbaProcedenciaNoValido");
          Xrm.Page.ui.clearFormNotification("SwiftNoValido");
          Xrm.Page.ui.clearFormNotification("SwiftLengthNoValido");
          Xrm.Page.ui.clearFormNotification("SwiftIntermediarioNoValido");
          Xrm.Page.ui.clearFormNotification("SwiftIntermediarioLengthNoValido");
          Xrm.Page.ui.clearFormNotification("SwiftProcedenciaNoValido");
          Xrm.Page.ui.clearFormNotification("SwiftProcedenciaLengthNoValido");
          
          
          if(Tab != null)
          {
                  if(lookupItem == 1)
                  {                
                    Xrm.Page.getControl("mv_name").setLabel("Nombre del beneficiario");        
 
                    Xrm.Page.ui.tabs.get("tab_3").setVisible(false);                  
                    Xrm.Page.ui.tabs.get("tab_2").setVisible(true);  
                  }
                  else if(lookupItem == 2)
                  {       
                     Xrm.Page.getControl("mv_name").setLabel("Nombre");
 
                     Xrm.Page.ui.tabs.get("tab_3").setVisible(true);         
                     Xrm.Page.ui.tabs.get("tab_2").setVisible(false);  
                  }
          }
     }
   
 };
 
 function SetTodaysDateOnLoad(){
  Xrm.Page.getAttribute("mv_fechadetransferencia").setValue(Date.now());
 };
 
 function ValidarAbaBeneficiario(){
     var ababancobeneficiario = Xrm.Page.getAttribute("mv_ababancobeneficiario").getValue();
     var RegEx_CED_IDENTIDAD =  /^[0-9]+$/;
     var mensaje = "";
     
    // Remove los espacion de la identificacion
     if (ababancobeneficiario != null) 
 {
     while (ababancobeneficiario.indexOf(" ") != -1) {
         ababancobeneficiario = ababancobeneficiario.slice(0, ababancobeneficiario.indexOf(" ")) + ababancobeneficiario.slice(ababancobeneficiario.indexOf(" ") + 1)
 }
 
      if (RegEx_CED_IDENTIDAD.test(ababancobeneficiario) != true) 
     {
         mensaje = "Debe ingresar solo n\xfameros para el ABA.";
         Xrm.Page.data.entity.attributes.get("mv_ababancobeneficiario").setValue(null);
                 Xrm.Page.ui.setFormNotification(mensaje, "INFO", "AbaNoValido");
                 Xrm.Page.getControl("mv_ababancobeneficiario").setNotification("Campo de Validaci\xf3n -ABA no valido");
        }
     else
     {
         Xrm.Page.ui.clearFormNotification("AbaNoValido");
                 Xrm.Page.getControl("mv_ababancobeneficiario").clearNotification();
     }  
         if(ababancobeneficiario.length > 0 && ababancobeneficiario.length != 9)   
         {
                 mensaje = "El ABA debe contener 9 d\xedgitos. ";
                 Xrm.Page.ui.setFormNotification(mensaje, "INFO", "AbaNoValido");
                 Xrm.Page.getControl("mv_ababancobeneficiario").setNotification("Campo de Validaci\xf3n -ABA no valido");
          }
          else
      {
         Xrm.Page.ui.clearFormNotification("AbaNoValido");
                 Xrm.Page.getControl("mv_ababancobeneficiario").clearNotification();
      }  
    }
    else
      {
         Xrm.Page.ui.clearFormNotification("AbaNoValido");
                 Xrm.Page.getControl("mv_ababancobeneficiario").clearNotification();
      } 
 
 };
 function ValidarAbaIntermediario(){
     var ababancointermediario = Xrm.Page.getAttribute("mv_ababancointermediario").getValue();
     var RegEx_CED_IDENTIDAD =  /^[0-9]+$/;
     var mensaje = "";
     
    // Remove los espacion de la identificacion
     if (ababancointermediario != null) 
     {
           while (ababancointermediario.indexOf(" ") != -1) {
            ababancointermediario = ababancointermediario.slice(0, ababancointermediario.indexOf(" ")) + ababancointermediario.slice(ababancointermediario.indexOf(" ") + 1)
             }
 
        if (RegEx_CED_IDENTIDAD.test(ababancointermediario) != true) 
     {
         mensaje = "Debe ingresar solo n\xfameros para el ABA";
         Xrm.Page.data.entity.attributes.get("mv_ababancointermediario").setValue(null);
                 Xrm.Page.ui.setFormNotification(mensaje, "INFO", "AbaIntermediarioNoValido");
                 Xrm.Page.getControl("mv_ababancointermediario").setNotification("Campo de Validaci\xf3n -ABA no valido");
        }
     else
     {
         Xrm.Page.ui.clearFormNotification("AbaIntermediarioNoValido");
                 Xrm.Page.getControl("mv_ababancointermediario").clearNotification();
     }  
 
         if(ababancointermediario.length > 0 && ababancointermediario.length != 9)   
         {
                 mensaje = "El ABA debe contener 9 d\xedgitos. ";
                 Xrm.Page.ui.setFormNotification(mensaje, "INFO", "AbaIntermediarioNoValido");
                 Xrm.Page.getControl("mv_ababancointermediario").setNotification("Campo de Validaci\xf3n -ABA no valido");
          }
          else
      {
         Xrm.Page.ui.clearFormNotification("AbaIntermediarioNoValido");
                 Xrm.Page.getControl("mv_ababancointermediario").clearNotification();
      }  
     }
     else
      {
         Xrm.Page.ui.clearFormNotification("AbaIntermediarioNoValido");
                 Xrm.Page.getControl("mv_ababancointermediario").clearNotification();
      }  
 
 };
 function ValidarAbaProcedencia(){
     var ababancodeprocedencia = Xrm.Page.getAttribute("mv_ababancodeprocedencia").getValue();
     var RegEx_CED_IDENTIDAD =  /^[0-9]+$/;
     var mensaje = "";
     
    // Remove los espacion de la identificacion
     if (ababancodeprocedencia != null) 
     {
     while (ababancodeprocedencia.indexOf(" ") != -1) {
         ababancodeprocedencia = ababancodeprocedencia.slice(0, ababancodeprocedencia.indexOf(" ")) + ababancodeprocedencia.slice(ababancodeprocedencia.indexOf(" ") + 1)
     }
 
    if (RegEx_CED_IDENTIDAD.test(ababancodeprocedencia) != true) 
     {
         mensaje = "Debe ingresar solo n\xfameros para el ABA";
         Xrm.Page.data.entity.attributes.get("mv_ababancodeprocedencia").setValue(null);
                 Xrm.Page.ui.setFormNotification(mensaje, "INFO", "AbaProcedenciaNoValido");
                 Xrm.Page.getControl("mv_ababancodeprocedencia").setNotification("Campo de Validaci\xf3n -ABA no valido");
        }
     else
     {
         Xrm.Page.ui.clearFormNotification("AbaProcedenciaNoValido");
                 Xrm.Page.getControl("mv_ababancodeprocedencia").clearNotification();
     }  
 
         if(ababancodeprocedencia.length > 0 && ababancodeprocedencia.length != 9)   
         {
                 mensaje = "El ABA debe contener 9 d\xedgitos. ";
                 Xrm.Page.ui.setFormNotification(mensaje, "INFO", "AbaProcedenciaNoValido");
                 Xrm.Page.getControl("mv_ababancodeprocedencia").setNotification("Campo de Validaci\xf3n -ABA no valido");
          }
          else
      {
         Xrm.Page.ui.clearFormNotification("AbaProcedenciaNoValido");
                 Xrm.Page.getControl("mv_ababancodeprocedencia").clearNotification();
      }  
     }
     else
      {
         Xrm.Page.ui.clearFormNotification("AbaProcedenciaNoValido");
                 Xrm.Page.getControl("mv_ababancodeprocedencia").clearNotification();
      }  
 };
 
 function ValidarSwiftBeneficiario(){
     var swiftbancobeneficiario = Xrm.Page.getAttribute("mv_swiftbancobeneficiario").getValue();
     var RegEx=  /^[a-z0-9]+$/i;
     var mensaje = "";	
     var mensajeLength = "";	
 
     if(swiftbancobeneficiario != null)
     {
         if (RegEx.test(swiftbancobeneficiario) != true) 
         {
             mensaje = "Debe ingresar solo n\xfameros y letras para el SWIFT.";
                     Xrm.Page.ui.setFormNotification(mensaje, "INFO", "SwiftNoValido");			
         }
         else
         {
             Xrm.Page.ui.clearFormNotification("SwiftNoValido");
                    
         }  
         if(swiftbancobeneficiario.length < 8 || swiftbancobeneficiario.length > 11)   
             {
                 mensajeLength = "El SWIFT debe contener 8 u 11 d\xedgitos ";
                 Xrm.Page.ui.setFormNotification(mensajeLength, "INFO", "SwiftLengthNoValido"); 
             }
             else
             {
                 Xrm.Page.ui.clearFormNotification("SwiftLengthNoValido");
             }  			
     }
     else
     {
         Xrm.Page.ui.clearFormNotification("SwiftNoValido");
         Xrm.Page.ui.clearFormNotification("SwiftLengthNoValido");
     }
 };
 function ValidarSwiftIntermediario(){
     var swiftbancointermediario = Xrm.Page.getAttribute("mv_swiftbancointermediario").getValue();
     var RegEx=  /^[a-z0-9]+$/i;
     var mensaje = "";	
     var mensajeLength = "";	
 
     if(swiftbancointermediario != null)
     {
         if (RegEx.test(swiftbancointermediario) != true) 
         {
             mensaje = "Debe ingresar solo n\xfameros y letras para el SWIFT.";
                     Xrm.Page.ui.setFormNotification(mensaje, "INFO", "SwiftIntermediarioNoValido");			
         }
         else
         {
             Xrm.Page.ui.clearFormNotification("SwiftIntermediarioNoValido");
                    
         }  
         if(swiftbancointermediario.length < 8 || swiftbancointermediario.length > 11)   
             {
                 mensajeLength = "El SWIFT debe contener 8 u 11 d\xedgitos ";
                 Xrm.Page.ui.setFormNotification(mensajeLength, "INFO", "SwiftIntermediarioLengthNoValido"); 
             }
             else
             {
                 Xrm.Page.ui.clearFormNotification("SwiftIntermediarioLengthNoValido");
             }  			
     }
     else
     {
         Xrm.Page.ui.clearFormNotification("SwiftIntermediarioNoValido");
         Xrm.Page.ui.clearFormNotification("SwiftIntermediarioLengthNoValido");
     }
 };
 
 function ValidarSwiftProcedencia(){
     var swiftbancodeprocedencia = Xrm.Page.getAttribute("mv_swiftbancodeprocedencia").getValue();
     var RegEx=  /^[a-z0-9]+$/i;
     var mensaje = "";	
     var mensajeLength = "";	
 
     if(swiftbancodeprocedencia != null)
     {
         if (RegEx.test(swiftbancodeprocedencia) != true) 
         {
             mensaje = "Debe ingresar solo n\xfameros y letras para el SWIFT.";
                     Xrm.Page.ui.setFormNotification(mensaje, "INFO", "SwiftProcedenciaNoValido");			
         }
         else
         {
             Xrm.Page.ui.clearFormNotification("SwiftProcedenciaNoValido");
                    
         }  
         if(swiftbancodeprocedencia.length < 8 || swiftbancodeprocedencia.length > 11)   
             {
                 mensajeLength = "El SWIFT debe contener 8 u 11 d\xedgitos ";
                 Xrm.Page.ui.setFormNotification(mensajeLength, "INFO", "SwiftProcedenciaLengthNoValido"); 
             }
             else
             {
                 Xrm.Page.ui.clearFormNotification("SwiftProcedenciaLengthNoValido");
             }  			
     }
     else
     {
         Xrm.Page.ui.clearFormNotification("SwiftProcedenciaNoValido");
         Xrm.Page.ui.clearFormNotification("SwiftProcedenciaLengthNoValido");
     }
 };
 