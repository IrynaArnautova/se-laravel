<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
</head>

<body>
<table style="width: 600px; border-collapse: collapse; border: 1px solid grey">
	<tbody>

	<tr>
		<td style="width: 25%;"></td>
		<td style="width: 25%;"></td>
		<td style="width: 25%;"></td>
		<td style="width: 25%;"></td>
	</tr>

	<tr>
		<td colspan="4" style="">
				<a href="{{ route('home') }}"><img src="http://elstorage.ru/img/logo.png" alt="EL STORAGE HOME" style="width: 30%; margin: 10px auto 10px; display:block;"></a>
		</td>
	</tr>

    @isset($msg->contact_info)
        <tr>
            <td colspan="2" style="border: 1px solid grey; padding: 0 18px 0 18px">
                <p>
                    Контактные данные:
                </p>
            </td>
            <td colspan="2" style="border: 1px solid grey; padding: 0 18px 0 18px">
                <p>
                    {{ $msg->contact_info }}
                </p>
            </td>
        </tr>
    @endisset
    @isset($msg->msg)
        <tr>
            <td colspan="2" style="border: 1px solid grey; padding: 0 18px 0 18px">
                <p>
                    Сообщение:
                </p>
            </td>
            <td colspan="2" style="border: 1px solid grey; padding: 0 18px 0 18px">
                <p>
                    {{ $msg->msg }}
                </p>
            </td>
        </tr>
    @endisset
	</tbody>
</table>

</body></html>

