# Scriptics

[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

Набор полезных инструментов и решений для веб-разработки: от конфигурационных файлов до JavaScript утилит и плагинов для шаблонизаторов.

## 📋 Содержимое

### 🔧 Конфигурационные файлы

#### `.htaccess`
Сборный htaccess файл с полезными директивами для Apache сервера:
- Безопасность и защита
- Оптимизация производительности
- SEO оптимизации
- Кэширование
- Перенаправления

*Подробности: [Статья на Habrahabr](http://habrahabr.ru/post/154643/)*

#### `input.placeholder.mini.js`
Легковесный JavaScript полифилл для поддержки HTML5 атрибута `placeholder` в старых браузерах (IE8 и ниже).

**Особенности:**
- Поддержка placeholder для текстовых полей
- Автоматическая очистка при отправке формы
- Минифицированный код (всего ~1KB)

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
   - Поддержка HTML тегов
   - Простая интеграция

3. **[topsecret](smarty/plugins/readme.md#topsecret)** - Скрытие конфиденциального текста
   - Замена символов на блоки ■
   - Полная защита от чтения

4. **[correct4pu](smarty/plugins/readme.md#correct4pu)** - Коррекция URL
   - Автоматическая обработка всех ссылок
   - SEO-friendly URL генерация
   - Output фильтр

**Пример подключения:**
```php
$smarty = new Smarty();
$smarty->addPluginsDir(__DIR__.'/smarty_plugins');
```

## 🚀 Установка

1. **Скачайте файлы:**
   ```bash
   git clone https://github.com/your-repo/scriptics.git
   cd scriptics
   ```

2. **Для .htaccess:**
   - Скопируйте `.htaccess` в корневую директорию вашего сайта
   - Адаптируйте директивы под свои нужды

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
