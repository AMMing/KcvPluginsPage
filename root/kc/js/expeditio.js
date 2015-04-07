var Expedition = function () {
    var obj = this;
    obj.areasList = null;
    obj.shiptypeList = null;

    obj.getAreasList = function (callback) {
        $.ajax({
            url: 'api/areas.php',
            dataType: 'json'
        }).done(function (val) {
            if (!!callback) {
                callback(val);
            }
        });
    };
    obj.getShiptypeList = function (callback) {
        $.ajax({
            url: 'api/shiptype.php',
            dataType: 'json'
        }).done(function (val) {
            if (!!callback) {
                callback(val);
            }
        });
    };
    obj.getAreasById = function (id) {
        for (var i = 0; i < obj.areasList.length; i++) {
            var item = obj.areasList[i];
            if (item.Id == id) {
                return item;
            }
        }

        return null;
    };
    obj.getAreasName = function (Id) {
        var val = obj.getAreasById(Id);
        if (!val) {
            return Id;
        }

        return val.Name;
    };
    obj.getShiptypeById = function (id) {
        for (var i = 0; i < obj.shiptypeList.length; i++) {
            var item = obj.shiptypeList[i];
            if (item.Id == id) {
                return item;
            }
        }

        return null;
    };
    obj.getShipTypeName = function (Id) {
        var val = obj.getShiptypeById(Id);
        if (!val) {
            //return '���޶�';
            return null;
        }

        return val.Name;
    };
    obj.getList = function (callback) {
        $.ajax({
            url: 'api/expeditions.php',
            dataType: 'json'
        }).done(function (val) {
            if (!!callback) {
                callback(val.Data);
            }
        });
    };
    obj.getList = function (callback) {
        $.ajax({
            url: 'api/expeditions.php',
            dataType: 'json'
        }).done(function (val) {
            if (!!callback) {
                callback(val.Data);
            }
        });
    };
    obj.uie = function (tag) {
        return $('<' + tag + '></' + tag + '>');
    };
    obj.XToY = function (val) {
        if (!val) {
            return val;
        }
        var list = val.split(',');
        if (list.length < 2) {
            return val;
        }
        return list[0] + ' - ' + list[list.length - 1];
    };
    obj.dateFormat = function (min) {
        var h = (min / 60 >> 0);
        if (h == 0) {
            h = '00';
        }
        var m = min % 60;
        if (m == 0) {
            m = '00';
        }
        return h + ":" + m;
    };
    obj.createShiptypeItem = function (item) {
        var tr_val = obj.uie('tr');

        //tr_val.append(obj.uie('td').text(item.Id));
        tr_val.append(obj.uie('td').text(item.Name));
        tr_val.append(obj.uie('td').text(item.Count));
        tr_val.append(obj.uie('td').text(item.Conditions));

        return tr_val;
    };
    obj.createTitle = function (val) {
        var div = obj.uie('div');
        div.addClass('title');
        div.append(obj.uie('span').text('[ID ' + val.Number + ']'));
        div.append(obj.uie('span').text(val.Name));

        return div;
    };
    obj.createShiptypeList = function (list) {
        if (!list || list.length <= 0) return null;

        var table = obj.uie('table');
        var tr_title = obj.uie('tr');
        table.addClass('shiptype');
        table.append(tr_title);
        //tr_title.append(obj.uie('th').text('Id'));
        tr_title.append(obj.uie('th').text('����'));
        tr_title.append(obj.uie('th').text('����'));
        tr_title.append(obj.uie('th').text('ͬ������'));

        $.each(list, function (index, val) {
            var tr_val = obj.createShiptypeItem(val);
            if (!!tr_val)
                table.append(tr_val);
        });

        return table;
    };
    obj.createItem = function (item) {
        var div = obj.uie('table');
        var row = function (title, val) {
            if (!val || val.length <= 0) return;

            var tr = obj.uie('tr');
            var td_title = obj.uie('td');
            var td_val = obj.uie('td');
            tr.append(td_title);
            tr.append(td_val);
            div.append(tr);

            td_title.text(title);
            td_val.text(val);

            return tr;
        };

        //row('Id', item.Id);
        row('���', item.Number);
        row('����', item.Name);
        row('�Ѷ�', item.Rank);
        row('����', obj.getAreasName(item.AreaId));
        row('���', item.Description);
        row('ʱ��', obj.dateFormat(item.Time));
        row('����ȼ��', item.ConsumeFuel + '%');
        row('���ĵ�ҩ', item.ConsumeAmmunition + '%');
        row('���ȼ��', item.GetFuel);
        row('��õ�ҩ', item.GetAmmunition);
        row('��ø���', item.GetSteel);
        row('�������', item.GetAluminum);
        row('��þ���', item.GetExp);
        row('����ʲ�', obj.XToY(item.GetBuildingMaterials));
        row('��ø��ٽ���', obj.XToY(item.GetHighSpeedBuilding));
        row('��ø����޸�', obj.XToY(item.GetHighSpeedRepair));
        row('��üҾ��䣨С��', obj.XToY(item.GetFurnitureSmall));
        row('��üҾ��䣨�У�', obj.XToY(item.GetFurnitureModerate));
        row('��üҾ��䣨��', obj.XToY(item.GetFurnitureBig));
        row('�ܵȼ�', item.SumLevel);
        row('�콢�ȼ�', item.FlagshipLevel);
        row('�콢����', obj.getShipTypeName(item.FlagshipType));
        row('��ͽ���', item.ShipCount);
        row('�����', item.BarrelCount);
        row('��󾽢��', item.BarrelShipCount);
        row('˵��', item.Explanation);
        row('׷��˵��', item.AppendExplanation);

        var shiptype_row = row('��Ҫ����', item.ShipTypes);
        if (!!shiptype_row) {
            var td_val = shiptype_row.find('td:last');
            shiptype_row.find('td:first').addClass('shiptype');
            td_val.empty();
            td_val.append(obj.createShiptypeList(item.ShipTypes));
        }

        return div;
    };
    obj.createList = function () {
        obj.getList(function (list) {
            var content = $('.content');
            $.each(list, function (index, val) {
                var title = obj.createTitle(val);
                var table = obj.createItem(val);
                content.append(title);
                content.append(table);
            });
        });
    };

    obj.initData = function () {
        obj.getAreasList(function (val) {
            obj.areasList = val;
            obj.getShiptypeList(function (val) {
                obj.shiptypeList = val;
                obj.createList();
            });
        });
    };
    obj.init = function () {
        obj.initData();
    };
};

var expedition = null;
Tools.appendJs('http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js', function () {
    expedition = new Expedition();
    expedition.init();
});