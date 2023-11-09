<?php
// Приклад даних про книги (замініть це на реальний код для роботи з базою даних)
$books = [
    ['title' => 'Я бачу, Вас цікавить пітьма', 'author' => 'Ілларіон Павлюк', 'year' => 2020],
    ['title' => 'Книга Анатомія: історія кохання', 'author' => 'Дана Шварц', 'year' => 2023],
    ['title' => 'Книга Мистецтво війни', 'author' => 'Сунь-Цзи', 'year' => 2000],
	['title' => 'Книга Гаррі Поттер і філософський камінь. Ілюстроване видання', 'author' => 'Джоан Роулінг', 'year' => 2016],
	['title' => 'Книга Фактор Черчилля. Як одна людина змінила історію', 'author' => 'Борис Джонсон', 'year' => 2019],
	['title' => 'Книга Вечірка на Гелловін (Привиди у Венеції)', 'author' => 'Агата Крісті', 'year' => 2023],
	['title' => 'Книга Жінки, які кохають до нестями', 'author' => 'Робін Норвуд', 'year' => 2017],
	['title' => 'Люби без ілюзій. Як звільнитися від токсичних стереотипів і побудувати здорові стосунки', 'author' => 'Анна Топіліна', 'year' => 2021],
	['title' => 'Книга Цирцея', 'author' => 'Мадлен Міллер', 'year' => 2020],
	
];

foreach ($books as $book) {
    echo "<div class='book'>
            <h3>{$book['title']}</h3>
            <p>Автор: {$book['author']}</p>
            <p>Рік видання: {$book['year']}</p>
          </div>";
}
?>