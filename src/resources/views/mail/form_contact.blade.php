<table border="0" cellspacing="0" cellpadding="0" width="700" align="center" style="border: #cccccc 3px solid;">
    <tbody>
    <tr>
        <td>
            <table border="0" cellspacing="0" cellpadding="2" width="100%">
                <tbody>
                <tr>
                    <td height="25" >&nbsp;</td>
                </tr>
                <tr>
                    <td valign="top" style="padding:20px;">

                        <span style="font-family:Georgia; font-size:12px;">
                        <strong>{{__('admin.email.contact.title')}} {{getConstField('page_title')}}</strong>
                        </span><br /><br />

                        <table width="100%"  border="1" cellpadding="10" cellspacing="0">
                            <tr>
                                <td width="25%">{{__('admin.email.contact.name')}}:</td>
                                <td width="75%">{{$form->name}}
                                    @if(!empty($form->surname))
                                        {{$form->surname}}
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <td>{{__('admin.email.contact.email')}}:</td>
                                <td>{{$form->email}}</td>
                            </tr>

                            <tr>
                                <td>{{__('admin.email.contact.phone')}}:</td>
                                <td>{{$form->phone}}</td>
                            </tr>

                            @if(!empty($form->address))
                                <tr>
                                    <td>Adres:</td>
                                    <td>{{$form->address}}</td>
                                </tr>
                            @endif
                            @if(!empty($form->postcode))
                                <tr>
                                    <td>Kod pocztowy:</td>
                                    <td>{{$form->postcode}}</td>
                                </tr>
                            @endif
                            @if(!empty($form->city))
                                <tr>
                                    <td>Miasto:</td>
                                    <td>{{$form->city}}</td>
                                </tr>
                            @endif
                            @if(!empty($form->voivodeship))
                                <tr>
                                    <td>Województwo:</td>
                                    <td>{{$form->voivodeship}}</td>
                                </tr>
                            @endif
                            <tr>
                                <td>{{__('admin.email.contact.message')}}:</td>
                                <td>{{$form->message}}</td>
                            </tr>


                        </table>

                        <br />
                        <br />
                        <span style="font-family:Georgia; font-size:12px;">{{__('admin.email.contact.send_from')}}</span>
                        <p>{{getConstField('page_title')}}</p>
                        <br />
                        <br />
                    </td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td height="25" align="center" style="background-color: #cccccc;font-family:Georgia; font-size:12px; color:#000; text-decoration: none">  {{getConstField('page_title')}} {{__('admin.email.contact.footer_text')}}
        </td>
    </tr>
    </tbody>
</table>
