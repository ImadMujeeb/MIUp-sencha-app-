Ext.define("MIUp.view.Main", {
    extend: 'Ext.Panel',
    requires: [
        'Ext.TitleBar',
        'Ext.Button',
        'Ext.Label'
    ],
    xtype: 'mainviewport',
    config: {
        fullscreen:true,
        cls: 'snapp',
        styleHtmlContent: true,
        scrollable: true,
        items: [
                {
                    docked: 'top',
                    xtype: 'titlebar',
                    title: 'Camera Upload Demo'
                },
                {
                    xtype:'label',
                    html:"<h1>There's a whole world out there</h1>"
                },
                {
                    xtype:'button',
                    html:'<h1 style="color:#FFF">SNAP!</h1>',
                    action:'snapPicture',
                    ui:'action rounded',
                    height: 100,
                    style:'margin-bottom:1em;'
                },
                {
                    xtype:'label',
                    html:"<h1>a piece of it.</h1>"
                },
                {
                    xtype:'label',
                    id:'hconsole',
                    html:'log:'
                }
            ]
    }
});
