/*User signup validation processs*/
$(function(){
  $('#frmRegister').validate({
    rules: {
       firstName: {
        required: true,
        nowhitespace:true
      },
       lastName: {
        required: true
      },
      maritalStatus: {
      required: true
      },
      cob: {
      required: true
      },
      gender: {
      required: true
      },
      dob: {
      required: true
      },
      phone: {
      required: true,
      minlength: 9
      },
     email: {
      email:true
      },
      address: {
      required: true
      },
      registerUsername: {
        required: true,
        nowhitespace:true,
        minlength: 4
      },
       password: {
        required: true,
          minlength: 8
      },
      confirmPassword: {
        required: true,
          minlength: 8,
        equalTo: "#password"
      }
    },
    //Sepcifing the validation messages
    messages: {
  
      registerUsername: {
        required: "<span class='error'>Please enter a username!</span>",
        minlength: "<span class='error'>Username must not be less than 4 characters!</span>",

      },
      password: {
        required: "<span class='error'>Please enter a valid password!</span>",
        minlength: "<span class='error'>Your password must be at least 8 characters long!</span>"
      },
      confirmPassword: {
        required: "<span class='error'>Please enter a valid password!</span>",
        minlength: "<span class='error'>Your password must be at least 8 characters long!</span>",
        equalTo: "<span class='error'>password did not match!</span>"
      }
    }
  });
});

/*Login validation snippet*/
  $(function(){
    $('#frmLogin').validate({

      rules: {
          Username: {
          required: true,
          nowhitespace:true
        },
        password: {
          required: true
        }
      },
      //Sepcifing the validation messages
      messages: {
          Username: {
            required: "<span class='error'>Please enter a username!</span>",

          },
          password: {
            required: "<span class='error'>Please enter a valid password</span>"
          }
      }
    });
  });

/*Course application validation script*/
$(function(){
  $('#apply').validate({
    rules: {
      passport: {
      required: true
      },
      instituton: {
        required: true,
      },
      certificate: {
        required: true,
      },
      pEmail: {
      email:true
      },
      program: {
      required: true
      },
      provider: {
      required: true
      },
      transactionCode: {
      required: true,
      minlength: 16
      },
      pPhone: {
      minlength: 9
      }
       
    },
    //Sepcifing the validation messages
    messages: {
      Email: {
        required: "<span class='error'>Please enter an email address!</span>",
        email: "<span class='error'>Please enter a valid email address!</span>"
      }
    }
  });
});
function trap(){
  return false;
}