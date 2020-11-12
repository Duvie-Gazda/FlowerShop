# php_flower_shop
Stady project to learn php_mysql

#Проект "Квіртковий Магазин"

##Виконавці
###Група 
*Бікбов Ігор Ігорович
*Гозда Юрій Васильович
*Бобич Андрій Ладіславович
*Кирлик Василь Васильович
*Мельник Ігор Михайлович (team leader)
*Данча Володимир Володимирович

##Доступ до бази даних (phpMyAdmin)
*###Сайт: https://h56.hvosting.ua/myadmin/
*###База даних:flower_shop
*###Логін: UzhKeksy
*###Пароль: 84FFKeW5

##Task list
- [ ] @mentions, #refs, [links](), **formatting**, and <del>tags</del> supported
- [ ] Create Views:
    - [ ] Create View Register form
    - [ ] Create View Autorization form
    - [ ] Create View User Edit form
    - [ ] Create View Order creating form
    - [ ] Create View Orders view form
    - [ ] Create View Feedback form

- [ ] Create Controls:
    - [ ] Create Contorl RegistratonControl
    - [ ] Create Contorl AutorizationControl
    - [ ] Create Contorl UserControl
    - [ ] Create Contorl OrderControl
    - [ ] Create Contorl SaleControl
    - [ ] Create Contorl PaymentControl


#Information
##Підключення до бази даних через php скрипт
$mysql =  mysqli_connect('h56.hvosting.ua', 'UzhKeksy', '84FFKeW5SELECT name FROM category', 'flower_shop', 3260);
if (mysqli_connect_errno($mysql)) {
    echo "Error connection : " . mysqli_connect_errno($mysql) . " " . mysqli_connect_error($mysql);
}