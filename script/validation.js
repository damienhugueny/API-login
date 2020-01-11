



    //On vérifie si les champs passwords son identiques
    function valider(){
        let form_sign_up = document.querySelector('#form_sign-up')
        let password = document.querySelector('#password-sub').value
        let pass = document.querySelector('#pass-sub').value
   
        
        console.log(password)
        console.log(pass)
        
      //on vérifie si les caractère sont correct
        let regex1 = /^[a-zA-Z0-9_-]{8,25}$/
        let regexPass = regex1.test(pass)
        let regexpassword = regex1.test(password)

        console.log(regexPass)
        console.log(regexpassword)
        
        if(regexPass === true && regexpassword === true){

            if (password === pass){
                //on met le lien si ok pour ne pas le voir dans la page
                form_sign_up.action ='./api/user/signup.php';
                return true;
            }
               
            else {
             
              //alert('Les mots de passes ne sont pas identiques')        
              return false;
            }
        }

        else {
            //alert('Les mots pass ne doit pas contenir d\'espace et doit avoir un minimum de 8 charactères ') 
           
            return false
        }
            
        
        
       
        
        
     }
     