<x-website.layouts.app title="Terms of Use">
    <div class="p-8 bg-white border border-dark/20 rounded-lg shadow-sm text-dark/90 text-sm">
        <x-ui.title :level="1" variant="page-sm" class="mb-4">Terms of Use</x-ui.title>

        <p class="mb-4">
            By accessing or using this website and its services, you agree to comply with and
            be bound by the following Terms of Use. If you do not agree with these terms,
            please do not use the service.
        </p>

        <x-ui.title :level="2" variant="section">1. Purpose of the Service</x-ui.title>
        <p class="mb-2">
            {{ config('app.name') ?? 'LUS' }} is a demo and development-purpose application designed to
            demonstrate URL shortening functionality. The service is provided "as is" and is not
            intended for production or commercial use.
        </p>

        <x-ui.title :level="2" variant="section">2. Use of the Service</x-ui.title>
        <p>You agree to use this service only for lawful purposes. You must not use the service to:</p>
        <ul class="list-disc pl-4 mb-2">
            <li>Shorten or distribute malicious, harmful, or misleading links</li>
            <li>Promote illegal activities</li>
            <li>Attempt to gain unauthorized access to the system</li>
            <li>Abuse or overload the service infrastructure</li>
        </ul>

        <x-ui.title :level="2" variant="section">3. Availability and Reliability</x-ui.title>
        <p class="mb-2">
            We do not guarantee that the service will be available at all times or that shortened
            URLs will remain accessible indefinitely. URLs may be modified, disabled, or removed
            at any time without prior notice.
        </p>

        <x-ui.title :level="2" variant="section">4. Data and Content Responsibility</x-ui.title>
        <p class="mb-2">
            You are solely responsible for the content of any URL you shorten using this service.
            {{ config('app.name') ?? 'LUS' }} does not review, monitor, or endorse the content of shortened links.
        </p>

        <x-ui.title :level="2" variant="section">5. Limitation of Liability</x-ui.title>
        <p class="mb-2">
            {{ config('app.name') ?? 'LUS' }} and its developers shall not be held liable for any direct,
            indirect, incidental, or consequential damages arising from the use or inability
            to use this service.
        </p>

        <x-ui.title :level="2" variant="section">6. Intellectual Property</x-ui.title>
        <p class="mb-2">
            All content, branding, and code related to {{ config('app.name') ?? 'LUS' }} are provided for
            educational and development purposes. No rights or licenses are granted except
            as explicitly stated.
        </p>

        <x-ui.title :level="2" variant="section">7. Changes to These Terms</x-ui.title>
        <p class="mb-2">
            We reserve the right to update or modify these Terms of Use at any time. Changes will
            be effective immediately upon posting on this page.
        </p>

        <x-ui.title :level="2" variant="section">8. Contact</x-ui.title>
        <p class="mb-2">
            If you have any questions about these Terms of Use, please contact the project
            maintainer through the repository or development channel.
        </p>

        <x-ui.title :level="2" variant="section">Disclaimer</x-ui.title>
        <p>
            This application is a development and demonstration project only. It is not intended
            for real-world usage or handling sensitive or personal data.
        </p>
    </div>
</x-website.layouts.app>
