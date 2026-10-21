# Scriptics

[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

Набор полезных инструментов и решений для веб-разработки: от конфигурационных файлов до JavaScript утилит и плагинов для шаблонизаторов.

## 📋 Содержимое

### 🔧 Конфигурационные файлы

#### `.htaccess`
Сборный htaccess файл с полезными директивами для Apache сервера:
- Безопасность и защита (фильтрация подозрительных query-строк)
- Оптимизация производительности
- SEO оптимизации
- Кэширование
- Перенаправления

*Подробности: [Статья на Habrahabr](http://habrahabr.ru/post/154643/)*

#### `input.placeholder.mini.js`
Легковесный JavaScript полифилл для поддержки HTML5 атрибута `placeholder` в старых браузерах (IE8 и ниже).

**Особенности:**
- Поддержка placeholder для текстовых полей (`input[type=text]`, прямые потомки `form`)
- Автоматическая очистка при отправке формы
- Небольшой размер (~1KB)

**Требования:** jQuery версии до 1.9 — скрипт использует `$.browser`, удалённый в 1.9.

**Использование:**
```html
<script src="input.placeholder.mini.js"></script>
```

### 🧩 Smarty Plugins

Коллекция полезных плагинов для [Smarty 3](https://www.smarty.net/), которые значительно упрощают работу с шаблонами.

**Расположение:** `smarty/plugins/`

#### Доступные плагины:

1. **[get_params](smarty/plugins/readme.md#get_params)** - Генерация GET параметров
   - Идеально для постраничной навигации
   - Поддержка исключения параметров
   - HTML entity encoding

2. **[highlight](smarty/plugins/readme.md#highlight)** - Выделение текста
   - Регистронезависимый поиск
   - Экранирование HTML по умолчанию
   - Простая интеграция

3. **[topsecret](smarty/plugins/readme.md#topsecret)** - Скрытие конфиденциального текста
   - Замена букв на блоки ▒
   - Полная защита от чтения

4. **[correct4pu](smarty/plugins/readme.md#correct4pu)** - Коррекция URL
   - Обработка локальных ссылок `<a href="/...">`
   - SEO-friendly URL генерация
   - Output фильтр

**Пример подключения:**
```php
$smarty = new Smarty();
$smarty->addPluginsDir(__DIR__.'/smarty/plugins');
$smarty->loadFilter('output', 'correct4pu'); // только если нужен фильтр
```

## 🚀 Установка

1. **Скачайте файлы:**
   ```bash
   git clone <URL-репозитория> scriptics
   cd scriptics
   ```

2. **Для .htaccess:**
   - Скопируйте `.htaccess` в корневую директорию вашего сайта
   - Замените адрес `www.roocms.com` в правилах редиректа на свой
   - Адаптируйте директивы под свои нужды и проверьте конфиг (`apachectl configtest`)

3. **Для JavaScript:**
   - Подключите `input.placeholder.mini.js` в ваш HTML:
   ```html
   <script src="path/to/input.placeholder.mini.js"></script>
   ```

4. **Для Smarty плагинов:**
   - Скопируйте папку `smarty/plugins/` в ваш проект
   - Подключите плагины в конфигурации Smarty

## 📖 Документация

- [Полная документация Smarty плагинов](smarty/plugins/readme.md)
- [Лицензия GPL v3](license.md)

## 🤝 Вклад в проект

Буду рад вашим предложениям и улучшениям! Создавайте issues или pull requests.

## 📄 Лицензия

Этот проект распространяется под лицензией **GNU General Public License v3.0**.

Подробности в файле [LICENSE](license.md).

## 🌟 Связанные проекты

Посмотрите мою open-source CMS:

[![RooCMS](http://version.roocms.com/logo.png)](https://github.com/RooCMS/RooCMS)

---

*Создано с ❤️ для веб-разработчиков*
