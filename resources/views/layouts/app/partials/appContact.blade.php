<div class="contacts" id="contacts">
    <div class="container">
        <div class="contacts-box">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95911.05971916985!2d69.22567679999999!3d41.304064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b2931f41f23%3A0x81095e06b654b845!2z0KHQutCy0LXRgCDQuNC8LiDQkNC80LjRgNCwINCi0LXQvNGD0YDQsA!5e0!3m2!1sru!2s!4v1628430165000!5m2!1sru!2s" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <form onsubmit="alert('Спасибо за ваше сообщение')" onsubmit="return validate()" name="mesForm" action="{{route('app.message')}}" method="POST">
                <div class="contacts-form">
                    {{csrf_field()}}
                    <h3>Связаться с нами</h3>
                    <input type="text" id="mesName" name="name" class="name" placeholder="Имя" required/>
                    <input type="tel" pattern="[0-9]{9}" id="mesPhone" name="phone" maxlength="9" class="phone"required placeholder="Телефон" />
                    <textarea  pattern="[A-Za-zА-Яа-яЁё]+[0-9]" id="message" minlength="40" class="message" name="message" rows="11"required placeholder="Напишите ваше сообщение"></textarea>
                    <button class="form-button" id="mesBtn" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>
