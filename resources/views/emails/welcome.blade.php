@component('mail::message')
# Introduction

Hi there,<br>
Thanks for trusting us to help you. We provide personal issues services i.e.,
Skill training, Academic support, Mentorship program, Workshops and presentations to classes and groups.
<br> Also Psycological services like Confidential counselling, Stress management, Relaxation Training and Supportive Therapy.
<br>
Thanks & Regards,
<br>SGC & Sahaayak.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
