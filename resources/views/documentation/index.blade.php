<!DOCTYPE html>
<html lang="en">
<style>
    @media (prefers-reduced-motion: no-preference) {
  * {
    scroll-behavior: smooth;
  }
}

html {
 box-sizing: border-box;
 display: block;
 font-family: 'Open Sans', sans-serif;
 background-color: rgb(255, 255, 255);
 color: rgb(77, 78, 83);
 line-height: 1.5;
}

header {
  font-size: 1.8em;
  color: black;
}

#navbar {
    position: fixed;
    min-width: 290px;
    top: 0px;
    left: 0px;
    width: 300px;
    height: 100%;
    border-right: solid;
    border-color: rgba(0, 22, 22, 0.4);
}

#navbar header {
  text-align: center;
  padding-top: 15;
  padding-bottom: 15;
  border-bottom: 1px solid;
}

#navbar li {
  display: inline-block;
  padding: 10px 30px;
  cursor: pointer;


}

#navbar li a {
  transition: all 0.3s ease 0s;
}

#navbar li a:hover {
  color: red;
}

#main-doc {
    position: absolute;
    margin-left: 310px;
    padding: 20px;
    margin-bottom: 110px;
}

ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}

code {
    display: block;
    text-align: left;
    white-space: pre-line;
    position: relative;
    word-break: normal;
    word-wrap: normal;
    line-height: 2;
    background-color: #f7f7f7;
    padding: 15px;
    margin: 10px;
    border-radius: 5px;
}

a {
  color: black;
}
</style>

      <nav id="navbar">
        <header>OpenIstitute Documentation</header>
        <ul>
            <li><a class="nav-link" href="#completed"> Whats Completed</a></li>
          <li><a class="nav-link" href="#Introduction">Introduction</a></li>
          <li><a class="nav-link" href="#user_roles_logins"> User Types and Roles & Logins</a></li>
          <li><a class="nav-link" href="#Apis">Apis  Routes<a></li>
          <li><a class="nav-link" href="#set_up">Set Up Env</a></li>
          </ul>
        </nav>

<main id="main-doc">
<section class="main-section" id="Introduction">
  <header>Introduction</header>
  <p> This projects takes tackles the entire interview questions both. It is written in Laravel, Jquery+ Ajax and Javascript 
    </p>
   
  </section>
  <section class="main-section" id="user_roles_logins">
    <header>User Types and Roles & Logins</header>
    <p>
There are two main User types; Admin and Users      </p>
      <ul>
        <li>
            User: User can create an account, Login in, Apply for a Leave, View leaves applied. User can also get notifications when someone hands Over A project to them          </li>
          <li>
            Admins: Admin has all the functions a user has. Additionally, Admins can create users in the system. They can View all leave requests, and approve them.
          </li>
          <li>
            Logins: Admin logins are <br>
            Username: shemmwaka1@gmail.com <br>
            Password: 12345678
          </li>
        </ul>
  </section>
  <section class="main-section" id="Apis">
    <header>Api Routes</header>
    <p>
This are the api routes to fetch Users and Leave requests      </p>
      <code>
        Site uRL /api/users-api
        Site uRL /api/leaves-api
      </code>
        <p> Select the code in the pad and hit Ctrl+R to watch it unfold in your browser!
      </p>
  </section>
  <section class="main-section" id="set_up">
    <header>Set Up Env</header>
    <p>
You need to set up Google auth credentials on the .env file  and Mail mail setting    </p>
<code>

GOOGLE_CLIENT_ID=xxxxxxxxx
GOOGLE_CLIENT_SECRET=xxxxxxxx
GOOGLE_REDIRECT=http://127.0.0.1:8000/google/callback

RECAPTCHAV3_SITEKEY=xxxxxxxx
RECAPTCHAV3_SECRET=xxxxxxxx

MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=shemmwaka1@gmail.com
MAIL_PASSWORD=xxxxxxxxxxx

</code>
          
  </section>
  <section class="main-section" id="completed">
   
    <code>
        User 
        : login(Including signup with gmail, Onetap signin too)
        : forgot password(Sends a mail with instructions)
        :change password
        :Create account
        :Profile page
        :Apply for a leave 
        :Email employee requests made.(Email send both to Leave applicant and Handend Over to)
        :View notifications

        Admin 
        : login(Including signup with gmail, Onetap signin too)
        : forgot password(Sends a mail with instructions)
        :change password
        :Create account
        :Profile page
        :Crud leave applications(Approve too)
        :Email employee requests made.(Email send both to Leave applicant and Handend Over to)
        :View notifications

    </code>
  </section>
  
  </section>
  </main>
<script>
    @media (prefers-reduced-motion: no-preference) {
  * {
    scroll-behavior: smooth;
  }
}

html {
 box-sizing: border-box;
 display: block;
 font-family: 'Open Sans', sans-serif;
 background-color: rgb(255, 255, 255);
 color: rgb(77, 78, 83);
 line-height: 1.5;
}

header {
  font-size: 1.8em;
  color: black;
}

#navbar {
    position: fixed;
    min-width: 290px;
    top: 0px;
    left: 0px;
    width: 300px;
    height: 100%;
    border-right: solid;
    border-color: rgba(0, 22, 22, 0.4);
}

#navbar header {
  text-align: center;
  padding-top: 15;
  padding-bottom: 15;
  border-bottom: 1px solid;
}

#navbar li {
  display: inline-block;
  padding: 10px 30px;
  cursor: pointer;


}

#navbar li a {
  transition: all 0.3s ease 0s;
}

#navbar li a:hover {
  color: red;
}

#main-doc {
    position: absolute;
    margin-left: 310px;
    padding: 20px;
    margin-bottom: 110px;
}

ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}

code {
    display: block;
    text-align: left;
    white-space: pre-line;
    position: relative;
    word-break: normal;
    word-wrap: normal;
    line-height: 2;
    background-color: #f7f7f7;
    padding: 15px;
    margin: 10px;
    border-radius: 5px;
}

a {
  color: black;
}
</script>
</html>