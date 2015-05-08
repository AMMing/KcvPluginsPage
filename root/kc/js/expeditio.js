var Expedition = function() {
    var obj = this;
    obj.areasList = null;
    obj.shiptypeList = null;
    obj.groupList = null;

    obj.getAreasList = function(callback) {
        $.ajax({
            url: 'api/areas.php',
            dataType: 'json'
        }).done(function(val) {
            if (!!callback) {
                callback(val);
            }
        });
    };
    obj.getShiptypeList = function(callback) {
        $.ajax({
            url: 'api/shiptype.php',
            dataType: 'json'
        }).done(function(val) {
            if (!!callback) {
                callback(val);
            }
        });
    };
    obj.getGroupList = function(callback) {
        $.ajax({
            url: 'api/groups.php',
            dataType: 'json'
        }).done(function(val) {
            if (!!callback) {
                callback(val);
            }
        });
    };
    obj.getAreasById = function(id) {
        for (var i = 0; i < obj.areasList.length; i++) {
            var item = obj.areasList[i];
            if (item.Id == id) {
                return item;
            }
        }

        return null;
    };
    obj.getAreasName = function(Id) {
        var val = obj.getAreasById(Id);
        if (!val) {
            return Id;
        }

        return val.Name;
    };
    obj.getShiptypeById = function(id) {
        for (var i = 0; i < obj.shiptypeList.length; i++) {
            var item = obj.shiptypeList[i];
            if (item.Id == id) {
                return item;
            }
        }

        return null;
    };
    obj.getShipTypeName = function(Id) {
        var val = obj.getShiptypeById(Id);
        if (!val) {
            //return '���޶�';
            return null;
        }

        return val.Name;
    };
    obj.getGroupById = function(id) {
        for (var i = 0; i < obj.groupList.length; i++) {
            var item = obj.groupList[i];
            if (item.Id == id) {
                return item;
            }
        }

        return null;
    };
    obj.getList = function(callback) {
        $.ajax({
            url: 'api/expeditions.php',
            dataType: 'json'
        }).done(function(val) {
            if (!!callback) {
                callback(val.Data);
            }
        });
    };
    obj.getList = function(callback) {
        $.ajax({
            url: 'api/expeditions.php',
            dataType: 'json'
        }).done(function(val) {
            if (!!callback) {
                callback(val.Data);
            }
        });
    };
    obj.uie = function(tag) {
        return $('<' + tag + '></' + tag + '>');
    };
    obj.XToY = function(val) {
        if (!val) {
            return val;
        }
        var list = val.split(',');
        if (list.length < 2) {
            return val;
        }
        return list[0] + ' - ' + list[list.length - 1];
    };
    obj.dateFormat = function(min) {
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
    obj.createGroupItem = function(id) {
        var ul = obj.uie('ul');
        var group = obj.getGroupById(id);
        $.each(group.ShipTypes, function(index, val) {
            ul.append(obj.uie('li').text(val.Name));
        });

        return ul;
    };


    obj.createShiptypeItem = function(item) {
        var tr_val = obj.uie('tr');

        var group = obj.createGroupItem(item.GroupId);
        tr_val.append(obj.uie('td').html(group));
        tr_val.append(obj.uie('td').text(item.Count));

        return tr_val;
    };
    obj.createTitle = function(val) {
        var div = obj.uie('div');
        div.addClass('title');
        div.append(obj.uie('span').text('[ID ' + val.num + ']'));
        div.append(obj.uie('span').text(val.name));

        return div;
    };
    obj.createShiptypeList = function(list) {
        if (!list || list.length <= 0) return null;

        var table = obj.uie('table');
        var tr_title = obj.uie('tr');
        table.addClass('shiptype');
        table.append(tr_title);
        //tr_title.append(obj.uie('th').text('Id'));
        tr_title.append(obj.uie('th').text('����'));
        tr_title.append(obj.uie('th').text('����'));
        // tr_title.append(obj.uie('th').text('ͬ������'));

        $.each(list, function(index, val) {
            var tr_val = obj.createShiptypeItem(val);
            if (!!tr_val)
                table.append(tr_val);
        });

        return table;
    };
    obj.createItem = function(item) {
        var div = obj.uie('table');
        var row = function(title, val) {
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
        row('���', item.num);
        row('����', item.name);
        row('�Ѷ�', item.r);
        row('����', obj.getAreasName(item.a_id));
        row('���', item.des);
        row('ʱ��', obj.dateFormat(item.time));
        row('����ȼ��', item.c_fuel + '%');
        row('���ĵ�ҩ', item.c_ammun + '%');
        row('���ȼ��', item.g_fuel);
        row('��õ�ҩ', item.g_ammun);
        row('��ø���', item.g_steel);
        row('�������', item.g_alumi);
        row('��þ���', item.g_exp);
        row('����ʲ�', obj.XToY(item.g_bm));
        row('��ø��ٽ���', obj.XToY(item.g_hsb));
        row('��ø����޸�', obj.XToY(item.g_hsr));
        row('��üҾ��䣨С��', obj.XToY(item.g_f_s));
        row('��üҾ��䣨�У�', obj.XToY(item.g_f_m));
        row('��üҾ��䣨��', obj.XToY(item.g_f_b));
        row('�ܵȼ�', item.sum_lv);
        row('�콢�ȼ�', item.fs_lv);
        row('�콢����', obj.getShipTypeName(item.fs_t));
        row('��ͽ���', item.s_count);
        row('�����', item.b_count);
        row('��󾽢��', item.bs_count);
        row('˵��', item.expl);
        row('׷��˵��', item.aexpl);

        var shiptype_row = row('��Ҫ����', item.s_types);
        if (!!shiptype_row) {
            var td_val = shiptype_row.find('td:last');
            shiptype_row.find('td:first').addClass('shiptype');
            td_val.empty();
            td_val.append(obj.createShiptypeList(item.s_types));
        }

        return div;
    };
    obj.createList = function() {
        obj.getList(function(list) {
            var content = $('.content');
            $.each(list, function(index, val) {
                var title = obj.createTitle(val);
                var table = obj.createItem(val);
                content.append(title);
                content.append(table);
            });
        });
    };

    obj.initData = function() {
        obj.getAreasList(function(val) {
            obj.areasList = val;
            obj.getGroupList(function(val) {
                obj.groupList = val;
                obj.getShiptypeList(function(val) {
                    obj.shiptypeList = val;
                    obj.createList();
                });
            });
        });
    };
    obj.init = function() {
        obj.initData();
    };

    return obj;
};

var expedition = null;
Tools.appendJs('http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js', function() {
    expedition = new Expedition();
    expedition.init();
});