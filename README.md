# TestAssignmentYii1.1
Test assignment for broadbandcompare.co.nz

The project was made in Yii 1.1.17 and PHP 5.6
http://testyii11.dev-int.in.ua/index.php?r=site/index

Database mysql
Databasename: yii_test
Username: yii
Password: yii

For deployment databese:
#yicc migrate

Contents of assignment (https://docs.google.com/document/d/1TCEHAammCv3kxFw_VFzEN9ClWtuXYSu2ffl1ceek6ew/edit#):

Тестовое задание для соискателей на позицию
PHP-developer Yii/Yii 2




Регулярные выражения

Вводная:

Есть произвольные числа с 2 знаками после запятой. Пример массива:

55.10, 55.01, 50.01, 55.00, 50.00

Задача:

С использованием функции preg_replace убрать все "лишние" нули после точки. Пример:

55.10 -> 55.1
55.01 -> 55.01
50.01 -> 50.01
50.00 -> 50
55.00 -> 55

Задача на знание и понимание Yii
Вводная:

Нужно написать простенькое приложение для управления древовидным меню (пусть будет дерево категорий) 


Нужно:

- пункт меню состоит из ссылки и названия
- должна быть возможность добавить дочерний пункт меню к любому из существующих
- удалить пункт, при удалении должны быть удалены все дочерние
- отредактировать пункт 
- модель вид и контролер на первом yii
- вывод меню в древовидном виде
- дерево должно отрисовываться в PHP скрипте с использованием (html, css), без использования javascript плагинов отрисовывающих дерево самостоятельно типо jqtree
- для создания формы добавления/редактирования данных нужно использовать CActiveForm
- Добавление/редактирование данных через модель, с использованием механизмов валидации Yii

Не нужно:
- авторизация
- дизайн

Дополнительно:
Все это на первом уии с использованием MVC предоставляемого фреймворком.

PS:
Этот тест можно легко найти в интернете. Копипаст здесь не нужен - такие кандидаты будут сразу отклоняться. В задаче главное показать свое понимание вопроса, умение использовать предложенный инструментарий и логическое мышление. Так что пусть что-то будет не работать, или работать криво/неправильно - это будет лучше, чем работающая копипаста без понимания, что вообще происходит.

