function onDragStart(event)
{
    event
      .dataTransfer
      .setData('text/plain', event.target.id);
}