<!DOCTYPE html>
<html>
<head>
    <title>Ticket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .ticket {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .event-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .event-details {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .ticket-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .ticket-info span {
            font-size: 14px;
        }

        .ticket-info .label {
            font-weight: bold;
        }

        .barcode {
            text-align: center;
            margin-top: 20px;
        }

        .barcode img {
            width: 150px;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <div class="event-name">{{ $event->event->title }}</div>
        <div class="event-details">
            <div class="ticket-info">
                <span class="label">User:</span>
                <span>{{ $event->user->name }}</span>
            </div>
            <div class="ticket-info">
                <span class="label">Date:</span>
                <span>{{ $event->event->date }}</span>
            </div>
            <div class="ticket-info">
                <span class="label">Location:</span>
                <span>{{ $event->event->adresse }}</span>
            </div>
        </div>
    </div>
</body>
</html>