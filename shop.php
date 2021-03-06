<?php
    header("Content-type: text/css; charset: UTF-8");
?>
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800;900&display=swap');

* {
  font-family: 'Raleway', sans-serif;
  font-size: 1.1rem;
  line-height: 2rem;
}

html {
    padding: 0;
    margin: 0;
    width: 100%;
    height: 100%;
  }

body {
  padding: 0;
  margin: 0;
  color: black;
}

hr {
  opacity: 30%;
}

h2 {
  font-weight: 800;
  font-size: 2rem;
}

.mainrow1 {
  height: 720px;
  background-color: white;
}

.mainrow2 {
  height: 600px;
  margin-top: 100px;
  background-color: white;
}


.pick_search {
  background-color: white;
  display: flex;
  height: 200px;
  margin: 50px 15% 15px 15%;
  padding: 50px 0 35px 0;
  flex-direction: column;
  justify-content: center;
}

.all_shop {
  background-color: white;
  height: 100px;
  padding: 0px 0 30px 0;
  margin: 0px 15% 0 15%;
}

.shop_category {
  background-color: white;
  padding: 30px 0 0 0;
}

#pick {
  background-color: white;
  padding-bottom: 30px;
  font-size: 2rem;
  font-family: 'Raleway', sans-serif;
  font-weight: 900;
  text-align: center;
}

h3 {
  font-size: 25px;

}

input[type=text] {
  float: right;
  padding: 15px;
  height: 40px;
  width: 98.3%;
  border: none;
  border-radius: 40px;
  margin: 8px 16px 0 0;
  background-color: #F2F2F2;
  font-size: 17px;
}

.exclusive_shops {
  background-color: white;
  display: flex;
  height: 480px;
  margin: 0 15%;
  overflow-x: auto;
  overflow-y: hidden;
  justify-content: space-between;

}

.subhead {
  position: relative;
  top: 7px;
  font-size: 12px;
  font-weight: 200;
  opacity: 70%;
}

.image {
  background: url(images/1.jpg);
  background-size:260px;
  height: 120px;
  width: 260px;
  border-radius: 20px 20px 0px 0px;

}

.shop {
  background-color: white;
  height: 420px;
  width: 260px;
  margin: 3px 5px 0px 5px;
  border-radius: 25px;
  border: 2px solid #F2F2F2;

}


.shop_name {
  font-weight: 700;
  font-size: 1.4rem;
  text-align: left;
  margin: 15px 0px 15px 10px;
  line-height: 1rem;
  padding: 10px;
}

.shop_description {

  padding: 10px 20px 20px 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.more {
  border: 2px solid #0087DB;
  background-color: white;
  color: #0087DB;
  font-weight: bold;
  height: 25px;
  width: 70%;
  margin: 10px 0 5px 0;
  text-align: center;
  position: relative;
  top: 30px;
  border-radius: 40px;
  transition-duration: .2s;
}

.more:hover {
  background-color: #0087DB;
  color: white;
}

.more {
  border: 2px solid #0087DB;
  color: #0087DB;
  font-weight: bold;
  height: 25px;
  width: 70%;
  padding-top: 5px;
  padding-bottom: 10px;
  text-align: center;
  position: relative;
  top: 30px;
  border-radius: 40px;
}

#pick {
  font-size: 40px;
}

::-webkit-scrollbar {
  height: 6px;
  width: 4px;
}

::-webkit-scrollbar-track {
  background: #f2F2F2;
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  background: #0087DB;
  border-radius: 10px;
}

.paragraph {
  background-color: white;
  margin: 100px 15% 120px 15%;
  display: flex;
  justify-content: space-around;
}

.sub_par {
  width: 40%;
}






header {
  display: flex;
  justify-content: space-between;
  padding: 8px;
  flex-direction: row;
  background-color: #32394A;
  align-items: center;
}

nav {
  margin-right: 15%;
}

.logo {
  font-weight: 900;
  font-size: 2rem;
  color: white;
  margin-left: 15%;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.logo a {
  font-weight: 900;
  font-size: 2rem;
  color: white;
}

a {
  font-size: 12px;
  color: white;
  text-decoration: none;
  background-color: #32394A;
}

.navigation li {
  display: inline-block;
  padding: 0px 20px;
  text-transform: uppercase;
}

footer {
  background-color: #32394A;
  padding: 5%;

}

.footmain {
  line-height: 1.5rem;
  color: white;
  text-align: center;
}

.reserve {
  color: white;
  opacity: 20%;
  font-family: arial;
  line-height: 2.2rem;
}

#foot_logo {
  font-size: 4rem;
  font-weight: 900;
  color: #0087DB;
  margin: 100px 15% 40px 15%;
  text-align: center;
}