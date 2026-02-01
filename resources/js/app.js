import './bootstrap';
import $ from 'jquery';
window.$ = window.jQuery = $;

$(function () {
    // Statistics Counter
    $('.counter').each(function () {
        const $el = $(this);
        const target = parseInt($el.data('target'), 10);

        $({ count: 0 }).animate(
            { count: target },
            {
                duration: 1000,
                easing: 'swing',
                step: function () {
                    $el.text(
                        Math.floor(this.count).toLocaleString('tr-TR') + '+'
                    );
                },
                complete: function () {
                    $el.text(
                        target.toLocaleString('tr-TR') + '+'
                    );
                }
            }
        );
    });

    // FAQ
    $('.faq-question').on('click', function () {
        const $item = $(this).closest('.faq-item');
        const $answer = $item.find('.faq-answer');

        // Close all others
        $('.faq-answer').not($answer).slideUp(200);
        $('.faq-question span').text('+');

        // Toggle current
        if ($answer.is(':visible')) {
            $answer.slideUp(200);
            $(this).find('span').text('+');
        } else {
            $answer.slideDown(200);
            $(this).find('span').text('–');
        }
    });

    // Password Visibility Togglers
    $(document).on('click', '.password-eye, .password-eye-off', function () {
        const wrapper = $(this).closest('.relative');
        const input = wrapper.find('.password-input');
        const isPassword = input.attr('type') === 'password';

        input.attr('type', isPassword ? 'text' : 'password');

        wrapper.find('.password-eye').toggleClass('hidden', isPassword);
        wrapper.find('.password-eye-off').toggleClass('hidden', !isPassword);
    });
});

